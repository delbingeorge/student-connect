<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="font-poppy bg-gray-100 px-4 py-8">
    <div class="max-w-4xl mx-auto">
        <h1 class="font-semibold text-xl mb-4 text-gray-800">STUDENT INFO</h1>
        <div>
            <div class="flex space-x-5 text-lg mb-4">
                <span class="font-medium">Full Name:</span>
                <span class="font-semibold">{{ $student_details->fullname }}</span>
            </div>
            <div class="flex space-x-5 text-lg mb-4">
                <span class="font-medium">USN:</span>
                <span class="font-semibold">{{ $student_details->student_id }}</span>
            </div>
        </div>

        @foreach ($feedbacks as $feedback)
            <div class="bg-white shadow-md rounded-lg p-6 mb-8">
                <h2 class="font-semibold text-lg mb-4">PERFORMANCE ENQUIRY {{ $feedback->form_number }}</h2>
                <div class="flex flex-col space-y-4 mb-4">
                    <div>
                        <p class="font-medium">Are you having any difficulty in understanding the concepts? If so give
                            details.</p>
                        <p>{{ $feedback->field1 }}</p>
                    </div>
                    <div>
                        <p class="font-medium">Action taken</p>
                        <p>{{ $feedback->field2 }}</p>
                    </div>
                    <div>
                        <p class="font-medium">State of the issue</p>
                        <p>{{ $feedback->field3 }}</p>
                    </div>
                </div>
                <div class="flex flex-col space-y-4 mb-4">
                    <div>
                        <p class="font-medium">Are you having any difficulty in implementing the concepts in the lab? If
                            so give details.</p>
                        <p>{{ $feedback->field4 }}</p>
                    </div>
                    <div>
                        <p class="font-medium">Action taken</p>
                        <p>{{ $feedback->field5 }}</p>
                    </div>
                    <div>
                        <p class="font-medium">State of the issue</p>
                        <p>{{ $feedback->field6 }}</p>
                    </div>
                </div>
                <div>
                    <h3 class="font-semibold text-lg mb-2">Give the attendance percentage</h3>
                    <div class="flex flex-col space-y-4 mb-4">
                        @isset($subjects)
                            @foreach ($subjects as $subject)
                                <div>
                                    <h4 class="font-semibold text-lg mb-2">{{ $subject->subject_name }}</h4>
                                    @isset($attendance['22MCA101'])
                                        <div>
                                            <p class="font-medium">Attendance:</p>
                                            <p>{{ $attendance[$subject->subject_code]->attendance_percentage }}%</p>
                                        </div>
                                    @else
                                        <p>No attendance recorded for this subject.</p>
                                    @endisset
                                </div>
                            @endforeach
                        @else
                            <p>No subjects available.</p>
                        @endisset
                    </div>
                    <div>
                        <p class="font-medium">Any issues in attendance.</p>
                        <p>{{ $feedback->field7 }}</p>
                    </div>
                    <div>
                        <p class="font-medium">Action taken</p>
                        <p>{{ $feedback->field8 }}</p>
                    </div>
                    <div>
                        <p class="font-medium">State of the issue</p>
                        <p>{{ $feedback->field9 }}</p>
                    </div>
                </div>
                <div class="flex flex-col space-y-4 mb-4">
                    <div>
                        <p class="font-medium">Any other issue.</p>
                        <p>{{ $feedback->field10 }}</p>
                    </div>  
                    <div>
                        <p class="font-medium">Action taken</p>
                        <p>{{ $feedback->field11 }}</p>  </div>
                    <div>
                        <p class="font-medium">State of the issue</p>
                        <p>{{ $feedback->field12 }}</p>
                    </div>
                </div>
                <div>
                    <h3 class="font-semibold text-lg mb-2 uppercase">Projects involved</h3>
                    <div>{{ $feedback->field13 }}</div>
                </div>
            </div>
        @endforeach
    </div>
</body>

</html>
