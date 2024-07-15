<?php

namespace App\Exports;

use App\Helpers\QueryHelper;
use App\Models\Admin;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PLAgentReportExport implements FromCollection , WithHeadings , WithMapping 
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public  $from_date , $to_date;

    public function __construct($from_date ,$to_date) {
        $this->from_date = $from_date;
        $this->to_date = $to_date;
    }

    public function headings(): array
    {
        return [
            'UID',
            'STAKE',
            'PLAYER P/L',
            'DOWNLINE P/L',
            'SUPER COMM',
            'UPLINE P/L'
        ];
    }

    public function collection()
    {
    $data = Admin::with('betHistories')->where('admins.deleted_at')->where('admins.role_id',Auth::guard('agent')->user()->role_id+1)->get();          
    return $data;
    }

    public function map($data): array
    {
        $rows = [];     
        if($data->count()>0){

            
        $r=1;
        $total_stake=0;
        $total_player_p_l = 0;
        $total_downline_p_l = 0;
        $total_master_commission = 0;

    

        $stake=number_format(QueryHelper::stake($data->role_id,$data->id,$this->from_date,$this->to_date),2); 
        if($stake>0){
        $win=number_format(QueryHelper::winner($data->role_id,$data->id,$this->from_date,$this->to_date),2);

       

        $lose=number_format(QueryHelper::loser($data->role_id,$data->id,$this->from_date,$this->to_date),2);

     


        $odds=number_format(QueryHelper::odds($data->role_id,$data->id,$this->from_date,$this->to_date),2);

       

        $player_p_l = number_format($win-$lose,2);
        $downline_p_l = $player_p_l;
        if($player_p_l>0){
        $master_commission = number_format((Auth::guard('agent')->user()->commission / 100) * $player_p_l,2);
        }else{
        $master_commission = 0.00;
        }
        $total_stake = number_format($total_stake + $stake,2);
        $total_player_p_l = number_format($total_player_p_l + $player_p_l,2);
        $total_downline_p_l = number_format($total_downline_p_l+$player_p_l,2);
        $total_master_commission = number_format($total_master_commission+$master_commission,2);

      
        
            $row = [
                @$data->username,            
                @$stake,
                @$player_p_l,
                @$downline_p_l,
                @$master_commission,
                @$player_p_l
            ];

            if(Auth::guard('agent')->user()->role_id<4){
    
                $client_ids=QueryHelper::client_list($data->role_id,$data->id);
           
             if(count($client_ids)>0){
            
             $bet_details = DB::table('bet_histories')
             ->select('sports_name',
             DB::raw('SUM(bet_placed) as total_bet_placed'),
             DB::raw('SUM(CASE WHEN result = 1 THEN bet_placed * (odd_req - 1) ELSE 0 END) AS win_amount'),
             DB::raw('SUM(CASE WHEN result = 2 THEN bet_placed ELSE 0 END) AS loss_amount')
             )
             ->whereIn('client_id', $client_ids)
             ->groupBy('sports_name')
             ->get();
             $de_win=0;
            
             foreach($bet_details as $btd){
           
             $total_loss_win=$btd->win_amount-$btd->loss_amount;
             if($master_commission>0){
             $super_comm=(Auth::guard('agent')->user()->commission / 100) * $total_loss_win;
             }else{
             $super_comm=0.00;
             }  

             $details=[
                  'Details'
             ];

            // $rows[] = array_merge($row,$details);

                   $newrow=[
                       $btd->sports_name,
                       number_format($btd->total_bet_placed,2),
                       number_format(str_replace('-','',$total_loss_win),2),
                       number_format(str_replace('-','',$total_loss_win),2),
                       number_format(str_replace('-','',$super_comm),2),
                       number_format($total_loss_win,2)       
                   ];
           
                 
                   $rows[] = $row;
                   $rows[] = $details;
                   $rows[] = $newrow;
     
                       }
                       }
                       }

            // print_r($row);
            // exit; 

            $r++; 
            }

            
            }

            //   print_r($rows);
            // exit;
        return $rows;
    }
}
