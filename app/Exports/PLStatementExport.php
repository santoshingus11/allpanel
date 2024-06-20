<?php

namespace App\Exports;

use App\Helpers\QueryHelper;
use App\Models\BankingHistory;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PLStatementExport implements FromCollection , WithHeadings , WithMapping 
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public  $from_date , $to_date ,$username , $balance_type;

    public function __construct($from_date ,$to_date,$username,$balance_type) {
        $this->from_date = $from_date;
        $this->to_date = $to_date;
        $this->username = $username;
        $this->balance_type = $balance_type;
    }

    public function headings(): array
    {
        return [
            'Date',
            'Description',
            'Ip',
            'From - To',
            'Amount',
            'Closing'
        ];
    }


    public function collection()
    {
        $admin_ids=QueryHelper::adminids();
        $plstatement=BankingHistory::select('banking_history.*','p_a.username as pa_username','u_a.username as ua_username')->join('admins as p_a','p_a.id','=','banking_history.parent_id')->join('admins as u_a','u_a.id','=','banking_history.user_id');

        if(Auth::guard('agent')->user()->role_id!=1){
            $plstatement=$plstatement->whereIn('banking_history.parent_id',$admin_ids);
        }

        if($this->balance_type!='all' && $this->balance_type!=''){
            $plstatement=$plstatement->where('banking_history.type',$this->balance_type);
        }

        if($this->from_date!='' && $this->to_date!=''){
            $plstatement=$plstatement->whereBetween('banking_history.created_at',[$this->from_date,$this->to_date]);
        }

        if($this->username!=''){
            $plstatement=$plstatement->where('p_a.username','like','%'.$this->username.'%')->orWhere('u_a.username','like','%'.$this->username.'%');
        }

        $data=$plstatement->orderBy('banking_history.banking_history_id','DESC')->get();

        return $data;

    }

    public function map($data): array
    {     
       
        $row = [
            @$data->created_at,            
            @$data->remarks, 
            @$data->ip_address,           
            @$data->pa_username .'-'.@$data->ua_username,            
            @$data->amount,             
            '0.00',            
        ];
        return $row;
    }

}
