<?php

namespace App\Exports;

use App\Helpers\QueryHelper;
use App\Models\CreditLog;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CreditStatementExport implements FromCollection , WithHeadings , WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public  $credit_from_date , $credit_end_date ,$credit_username ;

    public function __construct($credit_from_date ,$credit_end_date,$credit_username) {
        $this->credit_from_date = $credit_from_date;
        $this->credit_end_date = $credit_end_date;
        $this->credit_username = $credit_username;
    }

    public function headings(): array
    {
        return [
            'Date',
            'User Name',
            'Master Name',
            'Stake'
        ];
    }

    public function collection()
    {

        $admin_ids=QueryHelper::adminids();
        $credit_history=CreditLog::select('credit_log.*','p_a.username as pa_username','u_a.username as ua_username')->join('admins as p_a','p_a.id','=','credit_log.credit_from')->join('admins as u_a','u_a.id','=','credit_log.credit_to');

        if(Auth::guard('agent')->user()->role_id!=1){
            $credit_history=$credit_history->whereIn('credit_log.credit_from',$admin_ids);
        }

        if($this->credit_username!=''){
            $credit_history=$credit_history->where('p_a.username','like','%'.$this->credit_username.'%')->orWhere('u_a.username','like','%'.$this->credit_username.'%');
        }

        if($this->credit_from_date!='' && $this->credit_end_date!=''){
            $credit_history=$credit_history->whereBetween('credit_log.created_at',[$this->credit_from_date,$this->credit_end_date]);
        }

        $data=$credit_history->orderBy('credit_log.credit_log_id','DESC')->get();

        return $data;
    }

    public function map($data): array
    {     
       
        $row = [
            date('Y-m-d',strtotime(@$data->created_at)),            
            @$data->ua_username ?? '', 
            @$data->pa_username ?? '',       
            @$data->stake ?? 0,    
        ];
        return $row;
    }

}
