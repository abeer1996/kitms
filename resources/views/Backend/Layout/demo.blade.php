<th>#</th>
            <th>Student Id</th>
            <th>Student Name</th>
            <th>Phone Number</th>
            <th>Gender</th>
            <th>Email Address</th>
            <th>Date of Birth</th>
            <th>Present Address</th>
            <th>Permanent Address</th>
            <th>Course Name</th>
            <th>Course Level</th>
            <th>Date of Admission</th>
            <th>Course Type</th>
            <th>Course Fee</th>
            <th>Payment Type</th>
            <th>Receive Payment</th>
            <th>Due Payment</th>
            <th>Transaction Id</th>
            <th>Action</th>




<td>{{$key + 1}}</td>
            <td>{{$student->student_id}}</td>
            <td>{{$student->student_name}}</td>
            <td>{{$student->contact}}</td>
            <td>{{$student->gender}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->dob}}</td>
            <td>{{$student->present_address}}</td>
            <td>{{$student->permanent_address}}</td>
            <td>{{$student->course_name}}</td>
            <td>{{$student->level}}</td>
            <td>{{$student->doa}}</td>
            <td>{{$student->ctype}}</td>
            <td>{{$student->course_fee}}</td>
            <td>{{$student->ptype}}</td>
            <td>{{$student->receive_payment}}</td>
            <td>{{$student->due_payment}}</td>
            <td>{{$student->trx_id}}</td>









            <th>#</th>
            <th>Teacher Id</th>
            <th>Teacher Name</th>
            <th>Phone Number</th>
            <th>Gender</th> 
            <th>Email</th>
            <th>NID</th>
            <th>Join Date</th>
            <th>Designation</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach($teachers as $key=>$teacher)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{$teacher->teacher_id}}</td>
            <td>{{$teacher->teacher_name}}</td>
            <td>{{$teacher->contact}}</td>
            <td>{{$teacher->gender}}</td>
            <td>{{$teacher->email}}</td>
            <td>{{$teacher->nid}}</td>
            <td>{{$teacher->doj}}</td>
            <td>{{$teacher->designation}}</td>
            