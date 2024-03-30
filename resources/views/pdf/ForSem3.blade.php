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
            <div class="table w-full border-collapse border border-gray-300">
                <div class="table-row bg-gray-200">
                    <div class="table-cell font-medium border border-gray-300 p-2">Full Name:</div>
                    <div class="table-cell font-semibold border border-gray-300 p-2">{{ $student_details->fullname }}
                    </div>
                </div>
                <div class="table-row">
                    <div class="table-cell font-medium border border-gray-300 p-2">USN:</div>
                    <div class="table-cell font-semibold border border-gray-300 p-2">{{ $student_details->student_id }}
                    </div>
                </div>
            </div>
        </div>
        <!-- <h2 class="font-semibold text-2xl mb-4">Semester {{ $student_details->semester }}</h2> -->
        @php
            $i = 0;
            $j = 0;
        @endphp
        @foreach ($feedbacks as $feedback)
            <div class="bg-white shadow-md rounded-lg p-6 mb-8">
                <h2 class="font-semibold text-lg mb-4">PERFORMANCE ENQUIRY {{ $feedback->form_number }}</h2>
                <div class="table w-full border-collapse border border-gray-300 mb-4">
                    <div class="table-row bg-gray-200">
                        <div class="table-cell font-medium border border-gray-300 p-2">Are you having any difficulty in
                            understanding the concepts? If so give
                            details.</div>
                        <div class="table-cell border border-gray-300 p-2">{{ $feedback->field1 }}</div>
                    </div>
                    <div class="table-row">
                        <div class="table-cell font-medium border border-gray-300 p-2">Action taken</div>
                        <div class="table-cell border border-gray-300 p-2">{{ $feedback->field2 }}</div>
                    </div>
                    <div class="table-row bg-gray-200">
                        <div class="table-cell font-medium border border-gray-300 p-2">State of the issue</div>
                        <div class="table-cell border border-gray-300 p-2">{{ $feedback->field3 }}</div>
                    </div>
                    <div class="table-row bg-gray-200">
                        <div class="table-cell font-medium border border-gray-300 p-2">Are you having any difficulty in
                            understanding the concepts? If so give
                            details.</div>
                        <div class="table-cell border border-gray-300 p-2">{{ $feedback->field4 }}</div>
                    </div>
                    <div class="table-row">
                        <div class="table-cell font-medium border border-gray-300 p-2">Action taken</div>
                        <div class="table-cell border border-gray-300 p-2">{{ $feedback->field5 }}</div>
                    </div>
                    <div class="table-row bg-gray-200">
                        <div class="table-cell font-medium border border-gray-300 p-2">State of the issue</div>
                        <div class="table-cell border border-gray-300 p-2">{{ $feedback->field6 }}</div>
                    </div>
                    <h3 class="font-semibold text-lg mb-2">Give the attendance percentage</h3>
                    <!-- <div class="flex flex-col space-y-4 mb-4"> -->
                        @if($feedback->semester == 1)
                            @isset($sem1_subjects)
                                @foreach ($sem1_subjects as $subject)
                                    <div class="table-row">
                                    <div class="table-cell font-medium border border-gray-300 p-2">{{ $subject->subject_name }}</div>
                                        @isset($sem1_attendance[$i])
                                            <div class="table-cell border border-gray-300 p-2">
                                            {{ $sem1_attendance[$i]->{$subject->subject_code} }}%
                                            </div>
                                        @else
                                            <div class="table-cell border border-gray-300 p-2">
                                            No attendance recorded for this subject.
                                            </div>
                                        @endisset
                                    </div>
                                @endforeach
                            @else
                                <p>No subjects available.</p>
                            @endisset
                            @php
                                $i++
                            @endphp
                        @endif
                        @if($feedback->semester == 2)
                            @isset($sem2_subjects)
                                @foreach ($sem2_subjects as $subject)
                                    <div class="table-row">
                                    <div class="table-cell font-medium border border-gray-300 p-2">{{ $subject->subject_name }}</div>
                                        @isset($sem2_attendance[$j])
                                            <div class="table-cell border border-gray-300 p-2">
                                            {{ $sem2_attendance[$j]->{$subject->subject_code} }}%
                                            </div>
                                        @else
                                            <div class="table-cell border border-gray-300 p-2">
                                            No attendance recorded for this subject.
                                            </div>
                                        @endisset
                                    </div>
                                @endforeach
                            @else
                                <p>No subjects available.</p>
                            @endisset
                            @php
                                $i++
                            @endphp
                        @endif
                    <!-- </div> -->
                    <div class="table-row bg-gray-200">
                        <div class="table-cell font-medium border border-gray-300 p-2">Any issues in attendance.</div>
                        <div class="table-cell border border-gray-300 p-2">{{ $feedback->field7 }}</div>
                    </div>
                    <div class="table-row">
                        <div class="table-cell font-medium border border-gray-300 p-2">Action taken</div>
                        <div class="table-cell border border-gray-300 p-2">{{ $feedback->field8 }}</div>
                    </div>
                    <div class="table-row bg-gray-200">
                        <div class="table-cell font-medium border border-gray-300 p-2">State of the issue</div>
                        <div class="table-cell border border-gray-300 p-2">{{ $feedback->field9 }}</div>
                    </div>
                    <div class="table-row bg-gray-200">
                        <div class="table-cell font-medium border border-gray-300 p-2">Any other issues</div>
                        <div class="table-cell border border-gray-300 p-2">{{ $feedback->field10 }}</div>
                    </div>
                    <div class="table-row">
                        <div class="table-cell font-medium border border-gray-300 p-2">Action taken</div>
                        <div class="table-cell border border-gray-300 p-2">{{ $feedback->field11 }}</div>
                    </div>
                    <div class="table-row bg-gray-200">
                        <div class="table-cell font-medium border border-gray-300 p-2">State of the issue</div>
                        <div class="table-cell border border-gray-300 p-2">{{ $feedback->field12 }}</div>
                    </div>
                    <div class="table-row bg-gray-200">
                        <div class="table-cell font-medium border border-gray-300 p-2">Projects Involved</div>
                        <div class="table-cell border border-gray-300 p-2">{{ $feedback->field13 }}</div>
                    </div>
                </div>
            </div>
        @endforeach
        

    </div>
</body>

</html>
