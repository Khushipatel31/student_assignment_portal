<div class="modal fade" id="studentModal" tabindex="-1" aria-labelledby="facilityModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="studentModalLabel">
                    ADD STUDENT
                </h5>
                <input type="hidden" value="" />
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="dbQuery/insertStudent.php" method="POST" id="addStudentForm">
                    <div class="mb-3">
                        <label for="fullname" class="form-label">Full name</label>
                        <input type="text" name="fullname" class="form-control" id="fullname"
                            aria-describedby="nameHelp">
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" id="username"
                            aria-describedby="nameHelp">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" id="email" aria-describedby="nameHelp">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password"
                            aria-describedby="nameHelp">
                    </div>
                    <div class="mb-3">
                        <label for="department" class="form-label">Department</label>
                        <select style="width: 100%;" class="form-control" name="department" id="department">
                            <option value="IT">IT</option>
                            <option value="Mechanical">Mechanical</option>
                            <option value="Electrical">Electrical</option>
                            <option value="Chemical">Chemical</option>
                            <option value="EC">EC</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="semester" class="form-label">Semester</label>
                        <input type="number" name="semester" class="form-control" id="semester"
                            aria-describedby="nameHelp">
                    </div>
                    <div class="mb-3">
                        <label for="academicYear" class="form-label">Academic Year</label>
                        <input type="number" name="academicYear" class="form-control" id="academicYear"
                            aria-describedby="nameHelp">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary"
                    onclick="document.getElementById('addStudentForm').submit()">Save changes</button>
            </div>

        </div>
    </div>
</div>
<!-- <script>
    function getTaluka(e) {
        let districtId = $(e).val();
        if (districtId != "0") {

            $.ajax({
                type: "post",
                url: "/admin/getBlocks",
                data: { districtId },
                success: function (response) {
                    let html = "";
                    response.blocks.forEach(ele => {
                        html += `<option value='${ele._id}''>${ele.name}</option>`
                    })
                    console.log(html);
                    $("#talukaId").html(html);
                }
            });
        }
    }
    function getfacilityName(e) {
        let blockId = $("#talukaId").val();
        let typeId = $("#typeId").val();
        if(blockId)
        {
            $.ajax({
                type: "post",
                url: "/admin/getFacility",
                data: { blockId, typeId },
                success: function (response) {
                    let html = "";
                    response.facilities.forEach(ele => {
                        html += `<option value='${ele._id}''>${ele.name}</option>`
                    })
                    $("#facilityName").html(html);
                }
            });
        }
    }
</script> -->