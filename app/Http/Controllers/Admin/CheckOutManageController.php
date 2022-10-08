<?php

namespace App\Http\Controllers\Admin;
use App\Models\CheckOutHistory;
use App\Models\Appointment;
use App\Models\MedicinePill;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class CheckOutManageController extends Controller
{
    //
    public function index($id)
    {
        $appointment = Appointment::find($id);
        if ($appointment->status != 'Accepted') {
            return redirect()->route('all-appointment.index')->with('error', 'Cannot process check out for appointment that is not accepted');
        }
        
        return view('admin.appointment.checkout') ->with('appointment', $appointment);
    }

    public function store(Request $request) {
        $medicine = $request->medicine;
        $quantity = $request->quantity;
        $price= $request->price;
        $instruction= $request->instruction;
        $check_out_history_id= $request->check_out_history_id;
        $appointment_id = $request->appointment_id;

        $app = Appointment::find($appointment_id);
        $user_id = $app->user_id;

        $coh = new CheckOutHistory();
        $coh->user_id = $user_id;
        $coh->department_id = $app->department_id;
        $coh->hospital_id = $app->hospital_id;
        
        $coh->appointment_id = $appointment_id;
        $coh->symptoms = $request->symptoms;
        $coh->conclusion = $request->conclusion;
        $coh->staff_id = Auth::user()->id;
        $coh->doctor_id = $app->doctor_id;
        $coh->total = $request->payment;
        $coh->isPaid = $request->isPaid;
        $coh->save();

        $coh_id = $coh->id;

        // just get the last id of the checkout history

        for ($i=0; $i < count($medicine); $i++) { 
            $mp = new MedicinePill();
            $mp->medicine = $medicine[$i];
            $mp->quantity = $quantity[$i];
            $mp->price = $price[$i];
            $mp->instruction = $instruction[$i];
            $mp->check_out_history_id = $coh_id;
            $mp->save();
        }

        

        foreach($medicine as $key => $no)
        {
            $data = array(
                'medicine' => $medicine[$key],
                'quantity' => $quantity[$key],
                'price' => $price[$key],
                'instruction' => $instruction[$key],
                'check_out_history_id' => $coh_id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            );
            $insert_data[] = $data;
        }
        MedicinePill::insert($insert_data);

        // return admin.checkout.show with success-check-out
        return redirect()->route('admin.appointment.edit', $appointment_id)->with('success-check-out', 'Check out successfully', compact('coh'));
           
    }


       
        
}
