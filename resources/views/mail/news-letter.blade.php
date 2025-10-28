<h1>Congratulation {{$user->first_name . ' ' . $user->last_name}}!! 🎉 </h1>
<p>The <b>{{$appointment->service->name}}</b> has been book for the day <strong>{{$appointment->appointment_date}}</strong></p>
<p>For more info see your appointment here {{url('/appointments/'. $appointment->id)}}</p>
