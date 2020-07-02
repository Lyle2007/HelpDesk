<script>
    function ownershipFunction() {
        var ownership = document.getElementById("DeviceOwnershipInput").value;
        (ownership === "2") ? document.getElementById("SchoolDevice").style.display = "block" : document.getElementById("SchoolDevice").style.display = "none";
        (ownership === "1") ? document.getElementById("GuardianDevice").style.display = "block" : document.getElementById("GuardianDevice").style.display = "none";
    }
</script>
<div class="modal fade" id="TechnologyModal" tabindex="-1" role="dialog" aria-labelledby="TechnologyLabel" aria-hidden="true">

    <div class="container col-md-12 pt-4">
        <div class="modal-dialog" style="max-width: 800px" role="document">
            <div class="modal-content">
        <div class="card ">
            <div class="card-header-primary">
                Technology Support: Ticket
                <button type="button" class="close" data-dismiss="modal" data-target="#TechnologyModal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="card-body">
                <form method="POST" action="{{url('SupportTicket')}}">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="GuardianFirstNameInput">Guardian First Name</label>
                            <input type="text" class="form-control" id="GuardianFirstNameInput" name="GuardianFirstName"
                                   required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="GuardianLastNameInput">Guardian Last Name</label>
                            <input type="text" class="form-control" id="GuardianLastNameInput" name="GuardianLastName"
                                   required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="StudentFirstName">Student First Name</label>
                            <input type="text" class="form-control" id="StudentFirstNameInput" name="StudentFirstName"
                                   required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="StudentLastNameInput">Student Last Name</label>
                            <input type="text" class="form-control" id="StudentLastNameInput" name="StudentLastName"
                                   required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="GuardianEmailInput">Guardian Email</label>
                            <input type="email" class="form-control" id="GuardianEmailInput" name="GuardianEmail"
                                   placeholder="Example@email.com" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="GuardianPhoneInput">Guardian Phone</label>
                            <input type="text" class="form-control" id="GuardianPhoneInput" name="GuardianPhone"
                                   placeholder="(662)555-5555">
                            <small id="PhoneHelp" class="form-text text-muted">This is an optional field.</small>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="StudentSchoolInput">Students School</label>
                            <select id="StudentSchoolInput" class="form-control" name="StudentSchool">
                                <option selected></option>
                                <option>Sudduth</option>
                                <option>Henderson Ward Stewart</option>
                                <option>Overstreet</option>
                                <option>West Elementary</option>
                                <option>MSU Partnership School</option>
                                <option>Armstrong Jr High</option>
                                <option>Starkville High</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="StudentGradeInput">Students Grade</label>
                            <input type="number" class="form-control" id="StudentGradeInput" name="StudentGrade" placeholder="4th"
                                   required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="DeviceOwnershipInput">Device Ownership</label>
                            <select id="DeviceOwnershipInput" class="form-control" onchange="ownershipFunction()" name="DeviceOwnership">
                                <option value="0"></option>
                                <option value="1">I own the device being used.</option>
                                <option value="2">The school district owns the device.</option>
                            </select>
                            <small id="OwnershipHelp" class="form-text text-muted">Who owns the device you are
                                using?</small>
                        </div>
                        {{-- Select the device provided by the school --}}
                        <div id="SchoolDevice"
                             class="form-group col-md-6" style="display:none">
                            <label for="SchoolDeviceInput">School Device</label>
                            <select id="SchoolDeviceInput" class="form-control"  name="SchoolDevice">
                                <option selected></option>
                                <option>Macbook</option>
                                <option>Windows Laptop</option>
                                <option>I-Pad</option>
                                <option>Chromebook</option>
                            </select>
                            <small id="OwnershipHelp" class="form-text text-muted">Only select if provided by school
                                district.</small>
                        </div>
                        {{-- Select the device that is owned by the guardian --}}
                        <div id="GuardianDevice"
                             class="form-group col-md-6" style="display:none">
                            <label for="GuardianDeviceInput">Guardian Owned Device</label>
                            <select id="GuardianDeviceInput" class="form-control" name="GuardianDevice">
                                <option selected></option>
                                <option>I-Pad</option>
                                <option>I-Phone</option>
                                <option>Android Phone</option>
                                <option>Macbook</option>
                                <option>Windows Laptop</option>
                                <option>Chromebook</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="ConnectionTypeInput">How are you connecting to the Internet?</label>
                            <select id="ConnectionTypeInput" class="form-control" name="ConnectionType">
                                <option selected></option>
                                <option>School Provided Hotspot</option>
                                <option>Guardian Owned Wireless</option>
                                <option>Guardian Owned Hotspot</option>
                                <option>Public Wifi</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="IssueDescription">Describe your Issue</label>
                            <textarea class="form-control" id="IssueDescription" rows="3" name="IssueDescription" required></textarea>
                            <small id="IssueHelp" class="form-text text-muted">
                                Describe your issue here, make sure to include the type of technology and grade of the
                                student.
                            </small>
                        </div>
                    </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit Ticket</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
