<?php

namespace App\Http\Controllers;

use App\Http\Requests\DoctorRequest\CreateDoctorRequest;
use App\Http\Requests\DoctorRequest\UpdateDoctorRequest;
use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Flash;
use Response;

class FourthAssignmentController extends Controller
{
    /**
     * Display a listing of the Doctors.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var Doctor $entries */
        $doctors = Doctor::orderBy('created_at', 'desc')->paginate(5);
        return view('doctors.index')
            ->with('doctors', $doctors);
    }

    /**
     * Show the form for creating a new Doctor.
     *
     * @return Response
     */
    public function create()
    {
        return view('doctors.create');
    }

    /**
     * Store a newly created Doctors in storage.
     * @param CreateDoctorRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(CreateDoctorRequest $request)
    {
        $input = $request->all();

        /** @var Doctor $entry */
        $entry = Doctor::create($input);

        Flash::success('Doctor details saved successfully.');

        return redirect(route('assignment4.index'));
    }

    /**
     * Show the form for editing the specified Doctor.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Doctor $doctor */
        $doctor = Doctor::find($id);

        if (empty($doctor)) {
            Flash::error('Doctor details not found');

            return redirect(route('assignment4.index'));
        }

        return view('doctors.edit')->with('doctor', $doctor);
    }

    /**
     * Update the specified Doctor in storage.
     * @param $id
     * @param UpdateDoctorRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, UpdateDoctorRequest $request)
    {
        /** @var Doctor $doctor */
        $doctor = Doctor::find($id);

        if (empty($doctor)) {
            Flash::error('Doctor details not found');

            return redirect(route('assignment4.index'));
        }

        $doctor->fill($request->all());
        $doctor->save();

        Flash::success('Doctor details updated successfully.');

        return redirect(route('assignment4.index'));
    }

    public function appointmentList(){
        $appointments = Appointment::orderBy('appointment_status', 'desc')->paginate(5);
        return view('doctors.appointment-list')
            ->with('appointments', $appointments);
    }

    /**
     * @param $doctor_id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function bookAppointment($doctor_id){
        /** @var Doctor $doctor */
        $doctor = Doctor::find($doctor_id);

        if (empty($doctor)) {
            Flash::error('Doctor details not found');

            return redirect(route('assignment4.index'));
        }
        if(Appointment::create(['doctor_id' => $doctor_id])){
            Doctor::whereId($doctor_id)->update(['status' => 'busy']);
        }
        Flash::success('Doctor appointment successful.');
        return redirect(route('assignment4.index'));
    }

    /**
     * @param $appointment_id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function completeAppointment($appointment_id){
        /** @var Doctor $doctor */
        $appointment = Appointment::with('doctor')->find($appointment_id);

        if (empty($appointment)) {
            Flash::error('Appointment details not found');

            return redirect(route('assignment4.appointment-list'));
        }
        if(Appointment::whereId($appointment_id)->update(['appointment_status' => 'completed'])){
            Doctor::whereId($appointment->doctor_id)->update(['status' => 'free']);
        }
        Flash::success('Doctor appointment completed.');
        return redirect(route('assignment4.appointment-list'));
    }
}
