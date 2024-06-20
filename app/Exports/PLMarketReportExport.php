<?php

namespace App\Exports;

use App\Models\Admin;
use App\Models\BetHistory;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class PLMarketReportExport implements FromCollection , WithHeadings , WithMapping 
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public  $sports_name , $market_name , $event_name, $member_name;

    public function __construct($sports_name ,$market_name,$event_name,$member_name) {
        $this->sports_name = $sports_name;
        $this->market_name = $market_name;
        $this->event_name = $event_name;
        $this->member_name = $member_name;
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
        $bet_history=BetHistory::select('bet_histories.*','admins.username')->join('admins','admins.id','=','bet_histories.client_id');

        if(Auth::guard('agent')->user()->role_id != 1){
          $adminids = Admin::where('admin_id',Auth::guard('agent')->user()->id)->pluck('id')->toArray();
          $bet_history=$bet_history->whereIn('bet_histories.client_id',$adminids);
        }   

        if($this->sports_name!='' && $this->sports_name!='All'){
          $bet_history=$bet_history->where('bet_histories.sports_name','like','%'.$this->sports_name.'%');
        }

        if($this->event_name!=''){
          $bet_history=$bet_history->where('bet_histories.event_name','like','%'.$this->event_name.'%');
        }

        if($this->market_name!='' && $this->market_name!='All'){
          $bet_history=$bet_history->where('bet_histories.market_name','like','%'.$this->market_name.'%');
        }

        if($this->member_name!=''){
          $bet_history=$bet_history->where('admins.username','like','%'.$this->member_name.'%');
        }


     $data=$bet_history->orderBy('bet_histories.bet_history_id','DESC')->get();

     return $data;
    }

    public function map($data): array
    {
      
        $stake=$data->bet_placed;
        if($data->result==1){
        $winner=$data->bet_placed * ($data->odd_req - 1);
        } else{
          $winner=0;
        } 
        if($data->result==2){
        $loss= $data->bet_placed;
        } else{
        $loss=0;
        } 
        $player_profit=$winner - $loss;
        $super_comm=(Auth::guard('agent')->user()->commission / 100) * $player_profit;
       

        $row = [
            @$data->sports_name.'->'.@$data->match_name,            
            @$stake,
            @$player_profit,
            @$player_profit,
            @$super_comm,
            @$player_profit
        ];
        return $row;
    }

    
}
