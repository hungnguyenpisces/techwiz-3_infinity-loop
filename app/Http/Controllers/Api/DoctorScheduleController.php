<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\User;
use App\Models\Department;
use App\Models\Hospital;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorScheduleController extends Controller
{
  public $DR_COLORS =
  [
    '1' => '#F44336', '2' => '#E91E63', '3' => '#9C27B0', '4' => '#673AB7', '5' => '#3F51B5',
    '6' => '#2196F3', '7' => '#03A9F4', '8' => '#00BCD4', '9' => '#009688', '10' => '#4CAF50',
    '11' => '#8BC34A', '12' => '#CDDC39', '13' => '#FFEB3B', '14' => '#FFC107', '15' => '#FF9800',
    '16' => '#FF5722', '17' => '#795548', '18' => '#9E9E9E', '19' => '#607D8B', '20' => '#000000',
    '21' => '#FFEBEE', '22' => '#FFCDD2', '23' => '#EF9A9A', '24' => '#E57373', '25' => '#EF5350',
    '26' => '#F44336', '27' => '#E53935', '28' => '#D32F2F', '29' => '#C62828', '30' => '#B71C1C',
    '31' => '#FF8A80', '32' => '#FF5252', '33' => '#FF1744', '34' => '#D50000', '35' => '#FCE4EC',
    '36' => '#F8BBD0', '37' => '#F48FB1', '38' => '#F06292', '39' => '#EC407A', '40' => '#E91E63',
    '41' => '#D81B60', '42' => '#C2185B', '43' => '#AD1457', '44' => '#880E4F', '45' => '#FF80AB',
    '46' => '#FF4081', '47' => '#F50057', '48' => '#C51162', '49' => '#F3E5F5', '50' => '#E1BEE7',
  ];

  public $BG_COLORS =
  [
    '1' => '#F44336', '2' => '#E91E63', '3' => '#9C27B0', '4' => '#673AB7', '5' => '#3F51B5',
    '6' => '#2196F3', '7' => '#03A9F4', '8' => '#00BCD4', '9' => '#009688', '10' => '#4CAF50',
    '11' => '#8BC34A', '12' => '#CDDC39', '13' => '#FFEB3B', '14' => '#FFC107', '15' => '#FF9800',
    '16' => '#FF5722', '17' => '#795548', '18' => '#9E9E9E', '19' => '#607D8B', '20' => '#000000',
  ];

  public function DoctorScheduleCalendar()
  {

    $appointments = Appointment::join('users', 'users.id', '=', 'appointments.user_id')
      ->join('departments', 'departments.id', '=', 'appointments.department_id')
      ->join('hospitals', 'hospitals.id', '=', 'appointments.hospital_id')
      ->join('doctors', 'doctors.id', '=', 'appointments.doctor_id')
      ->select('appointments.id', 'appointments.hospital_id', 'appointments.department_id', 'appointments.doctor_id', 'doctors.first_name as doctors_first_name', 'doctors.last_name as doctors_last_name', 'departments.name as departments_name', 'appointments.self_check_symptom as body', 'appointments.date as date', 'appointments.time as time', 'hospitals.name as location', 'users.first_name as patient_first_name', 'users.last_name as patient_last_name')
      ->get();

    $data = [];
    foreach ($appointments as $appointment) {
      $start = $appointment->date . 'T' . $appointment->time;
      $end = $appointment->date . 'T' . date('H:i:s', strtotime($appointment->time . ' +1 hour'));
      $data[] = [
        'id' => $appointment->id,
        'calendarId' => $appointment->doctor_id,
        'title' => $appointment->departments_name,
        'body' => $appointment->body,
        'start' => $start,
        'end' => $end,
        'location' => $appointment->location,
        'attendees' => ["doctor: " . $appointment->doctors_first_name . " " . $appointment->doctors_last_name, "patient: " . $appointment->patient_first_name . " " . $appointment->patient_last_name],
        'state' => "Busy",
        'color' => "#ffffff",
        'backgroundColor' => $this->BG_COLORS[$appointment->department_id],
        'borderColor' => $this->DR_COLORS[$appointment->doctor_id],
        'isVisible' => true,
        'category' => "time",
        'isAllDay' => false,
        'hospital_id' => $appointment->hospital_id,
        'department_id' => $appointment->department_id,
        'doctor_id' => $appointment->doctor_id,
      ];
    }

    return response()->json($data);
  }

  public function checkboxData()
  {
    $hospitals = Hospital::select('id', 'name')->get();
    $departments = Department::select('id', 'name')->get();
    $doctors = Doctor::select('id', 'first_name', 'last_name')->get();

    foreach ($doctors as $key => $value) {
      $value->color = $this->DR_COLORS[$value->id];
    }

    foreach ($departments as $key => $value) {
      $value->color = $this->BG_COLORS[$value->id];
    }

    return response()->json([
      'hospitals' => $hospitals,
      'departments' => $departments,
      'doctors' => $doctors,
    ]);
  }
}
