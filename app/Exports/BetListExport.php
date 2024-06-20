<?php

namespace App\Exports;

use App\Helpers\QueryHelper;
use App\Models\BetHistory;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BetListExport implements FromCollection , WithHeadings , WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public  $from_date , $to_date ,$bet_list, $sports_name , $type;

    public function __construct($from_date ,$to_date,$bet_list,$sports_name,$type) {
        $this->from_date = $from_date;
        $this->to_date = $to_date;
        $this->bet_list = $bet_list;
        $this->sports_name = $sports_name;
        $this->type = $type;
    }

    public function headings(): array
    {
        $headings = [
            'Member',
            'Placed',
            'Description',
            'In Play',
            '1-Click',
            'Odds',
            'Stake',
            'Potential Profit',
            'Liability',
        ];
    
        if (Auth::guard('agent')->user()->role_id == 1) {
            $headings[] = 'Admin PT';
        }

        if(Auth::guard('agent')->user()->role_id==1 || Auth::guard('agent')->user()->role_id==2){
            $headings[] = 'Sup MA PT';
        }
                                 

        if(Auth::guard('agent')->user()->role_id==1 || Auth::guard('agent')->user()->role_id==3){
            $headings[] = 'MA PT';
        }
     

        if(Auth::guard('agent')->user()->role_id==1 || Auth::guard('agent')->user()->role_id==4){
            $headings[] = 'CUS PT';
        }  

        return $headings;


    }


    public function collection()
    {
         $ownid=QueryHelper::ownid();
        $date=date('Y-m-d');

       // DB::enableQueryLog();
        $bet_history=BetHistory::select('bet_histories.*','admins.username')->join('admins','admins.id','=','bet_histories.client_id');
        $current_bet_history=BetHistory::select('bet_histories.*','admins.username')->join('admins','admins.id','=','bet_histories.client_id');

        if(Auth::guard('agent')->user()->role_id != 1){
          $adminids =  QueryHelper::client_list(Auth::guard('agent')->user()->role_id,$ownid);   
          $bet_history=$bet_history->whereIn('bet_histories.client_id',$adminids);
          $current_bet_history=$current_bet_history->whereIn('bet_histories.client_id',$adminids);
        }  

        if($this->from_date!='' && $this->to_date!=''){
            $bet_history=$bet_history->whereBetween('bet_histories.created_at',[$this->from_date,$this->to_date]);
            $current_bet_history=$current_bet_history->whereBetween('bet_histories.created_at',[$this->from_date,$this->to_date]);
        }

        if($this->sports_name!=''){
            if($this->sports_name=='casino' || $this->sports_name=='xg'){
                $bet_history=$bet_history->where('bet_histories.sports_name','like',$this->sports_name);
                $current_bet_history=$current_bet_history->where('bet_histories.sports_name','like',$this->sports_name);    
            }else{
                $bet_history=$bet_history->where('bet_histories.sports_name','NOT LIKE','%casino%')->where('bet_histories.sports_name','NOT LIKE','%xg%');
                $current_bet_history=$current_bet_history->where('bet_histories.sports_name','NOT LIKE','%casino%')->where('bet_histories.sports_name','NOT LIKE','%xg%');    
            }
           
        }

        if($this->type!=''){
            $bet_history=$bet_history->where('bet_histories.type','like','%'.$this->type.'%');
            $current_bet_history=$current_bet_history->where('bet_histories.type','like','%'.$this->type.'%');   
        }

        $bet_list=$bet_history->where('bet_histories.created_at','like','%'.$date.'%')->whereNull('bet_histories.deleted_at')->orderBy('bet_histories.bet_history_id','DESC')->paginate(50);
        $past_bet_list=$current_bet_history->where('bet_histories.created_at','<',$date)->whereNull('bet_histories.deleted_at')->orderBy('bet_histories.bet_history_id','DESC')->paginate(50);
     

        if($this->bet_list=='current'){
            return $bet_list;
        }else{
            return $past_bet_list;
        }

    }

    public function map($data): array
    {   
            if($data->in_play==1){
                $in_play='Yes';
                }else{
                $in_play='NO';
                }   

            if($data->one_click==1){
                $oneclick='Yes';
            }else{
                $oneclick='NO';
            }

            if($data->result==1){
                $profit=$data->bet_placed*($data->odd_req-1);
            }else{
                $profit='0.00';
            }

            if($data->result==0){
               $loss=$data->bet_placed;
            }else{
               $loss='0.00';
            }

            if($data->result==1){
                $bet_placed=$data->bet_placed*($data->odd_req-1);
            }else{
                $bet_placed='0.00';
            }
       
        $row = [
            $data->username,            
            '--', 
            '--',       
            $in_play,
            $oneclick,
            $data->odd_req,
            $data->bet_placed,
            $profit,
            $loss,
            '0.00',
            '0.00',
            '0.00',
            $bet_placed
        ];
        return $row;
    }

}
