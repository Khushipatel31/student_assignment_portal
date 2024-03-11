<div class="modal fade" id="batchModal" tabindex="-1" aria-labelledby="facilityModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="batchModalLabel">
                    ADD BATCH
                </h5>
                <input type="hidden" value="" />
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="dbQuery/insertBatch.php" method="POST" id="addBatchForm">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name"
                            aria-describedby="nameHelp">
                    </div>
                    <div class="mb-3">
                    <select class="form-select" style="width: 100%;" id="studentselect" name="student[]" multiple="multiple" >
                            
                           
                        </select>
                    </div>
                   
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="saveChangesBtn"
                    >Save changes</button>
            </div>

        </div>
    </div>
</div>
<script>
    async function fetchStudents() {
        console.log("hi");
        const response = await fetch('dbQuery/getStudents.php');
        const students = await response.json();
        //console.log(students);
        return students;
}

    $(document).ready(async () => {
        const students = await fetchStudents();
        const selectElement = document.getElementById('studentselect');
        students.forEach(student => {
            const option = document.createElement('option');
            option.value = student.id;
            option.text = student.username;
            selectElement.appendChild(option);
            console.log("Added option:", option);
        });
        $("#studentselect").select2({
            dropdownParent: $("#batchModal .modal-content"),
            multiple: true,
            allowClear: true,
            placeholder: "Select Students",
        });
    });
    document.getElementById('saveChangesBtn').addEventListener('click', function () {
            const selectedStudents = [...document.getElementById('studentselect').selectedOptions].map(option => option.value);
            console.log('Selected students:', selectedStudents);

            // Update form action attribute before submission
            document.getElementById('addBatchForm').action = 'dbQuery/insertBatch.php';

            // Now you can proceed with form submission or further processing
            // Here, I'm just logging the selected values to the console
            document.getElementById('addBatchForm').submit();
        });
</script>