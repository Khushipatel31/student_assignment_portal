<div class="modal fade" id="assignmentModal" tabindex="-1" aria-labelledby="facilityModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="assignmentModalLabel">
                    CREATE ASSIGNMENT
                </h5>
                <input type="hidden" value="" />
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="dbQuery/insertAssignment.php" method="POST" id="addAssignmentForm">
                    <div class="mb-3">
                        <label for="name" class="form-label">Assignment Name</label>
                        <input type="text" name="name" class="form-control" id="name"
                            aria-describedby="nameHelp">
                    </div>
                     <div class="mb-3">
                        <label for="deadline" class="form-label">Deadline</label>
                        <input type="datetime-local" name="deadline" class="form-control" id="deadline"
                            aria-describedby="nameHelp">
                    </div>
                    <div class="mb-3">
                    <label for="deadline" class="form-label">Select Batch</label>

                    <select class="form-select" style="width: 100%;" id="batchselect" name="batch"  >
                            
                           
                        </select>
                    </div>
                    <div class="mb-3">
                    <select class="form-select" style="width: 100%;" id="questionselect" name="question[]" multiple="multiple" >
                            
                           
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
    async function fetchQuestions() {
        console.log("hi");
        const response = await fetch('dbQuery/getQuestions.php');
        const questions = await response.json();
        //console.log(students);
        return questions;
}
async function fetchBatches() {
        console.log("hi");
        const response = await fetch('dbQuery/getBatches.php');
        const batches = await response.json();
        //console.log(students);
        return batches;
}

    $(document).ready(async () => {
        const batches =  await fetchBatches();
        const questions = await fetchQuestions();
        const selectElement2 = document.getElementById('batchselect');
        batches.forEach(batch => {
            const option = document.createElement('option');
            option.value = batch.id;
            option.text = batch.name;
            selectElement2.appendChild(option);
            console.log("Added option:", option);
        });
        const selectElement = document.getElementById('questionselect');
        questions.forEach(question => {
            const option = document.createElement('option');
            option.value = question.id;
            option.text = question.question;
            selectElement.appendChild(option);
            console.log("Added option:", option);
        });
        $("#questionselect").select2({
            dropdownParent: $("#assignmentModal .modal-content"),
            multiple: true,
            allowClear: true,
            placeholder: "Select Questions",
        });
    });
    document.getElementById('saveChangesBtn').addEventListener('click', function () {
            const selectedQuestions = [...document.getElementById('questionselect').selectedOptions].map(option => option.value);
            console.log('Selected questions:', selectedQuestions);

            // Update form action attribute before submission
            document.getElementById('addAssignmentForm').action = 'dbQuery/insertAssignment.php';

            // Now you can proceed with form submission or further processing
            // Here, I'm just logging the selected values to the console
            document.getElementById('addAssignmentForm').submit();
        });
</script>