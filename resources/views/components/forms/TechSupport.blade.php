<div class="card">
    <div class="card-header-primary">
        New Ticket
    </div>
    <div class="card-body">
        <form method="POST" action="{{url('form')}}">
            @csrf
            <h5>Guardian Info</h5>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="EmailInput">Email</label>
                    <input type="email" class="form-control" id="EmailInput" name="Email" placeholder="Example@Email.com" required>
                    <small id="EmailHelp" class="form-text text-muted">Enter your first name.</small>
                </div>
                <div class="form-group col-md-6">
                    <label for="PhoneInput">Phone</label>
                    <input type="text" class="form-control" id="PhoneInput" name="Phone" placeholder="(662) 555-5555">
                    <small id="PhoneHelp" class="form-text text-muted">This is an optional field.</small>
                </div>
            </div>
{{--            <div class="form-row">--}}
{{--                <div class="form-group col-md-6">--}}
{{--                    <label for="GuardianFirstNameInput">First Name</label>--}}
{{--                    <input type="text" class="form-control" id="GuardianFirstNameInput" name="GuardianFirstName" required>--}}
{{--                    <small id="GuardianNameHelp" class="form-text text-muted">Enter your first name.</small>--}}
{{--                </div>--}}
{{--                <div class="form-group col-md-6">--}}
{{--                    <label for="GuardianLastNameInput">Last Name</label>--}}
{{--                    <input type="text" class="form-control" id="GuardianLastNameInput" name="GuardianLastName" required>--}}
{{--                    <small id="GuardianNameHelp" class="form-text text-muted">Enter your last name.</small>--}}
{{--                </div>--}}
{{--            </div>--}}
            <h5>Student Info</h5>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="FirstNameStudentInput">First Name</label>
                    <input type="text" class="form-control" id="FirstNameStudentInput" name="FirstNameStudent" required>
                    <small id="FirstNameStudentHelp" class="form-text text-muted">Enter the fist name of the student having issues.</small>
                </div>
                <div class="form-group col-md-6">
                    <label for="LastNameStudentInput">Last Name</label>
                    <input type="text" class="form-control" id="LastNameStudentInput" name="LastNameStudent" required>
                    <small id="LastNameStudentHelp" class="form-text text-muted">Enter the last name of the student having issues.</small>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-12">
                    <label for="IssueDescriptionTextarea">Issue Description</label>
                    <textarea class="form-control" id="IssueDescriptionTextarea" rows="3" required></textarea>
                </div>
            </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Sumbit Ticket</button>
        </form>
    </div>
