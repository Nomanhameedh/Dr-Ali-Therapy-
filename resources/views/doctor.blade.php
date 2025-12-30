<!DOCTYPE html>
<html>
<head>
    <title>Therapists</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h1 { color: #2c3e50; }
        .doctor { margin-bottom: 15px; padding: 10px; border: 1px solid #ccc; border-radius: 5px; }
    </style>
</head>
<body>
    <h1>Therapists (Doctors) Page</h1>

    <div class="doctor">
        <h3>Dr. Ali Khan</h3>
        <p>Speciality: Physical Therapy</p>
    </div>

    <div class="doctor">
        <h3>Dr. Sara Ahmed</h3>
        <p>Speciality: Mental Wellness</p>
    </div>

    <!-- Agar database se fetch karoge to loop ka code kuch is tarah hoga -->
    {{-- 
    @foreach($doctors as $doctor)
        <div class="doctor">
            <h3>{{ $doctor->name }}</h3>
            <p>Speciality: {{ $doctor->speciality }}</p>
        </div>
    @endforeach 
    --}}
</body>
</html>
