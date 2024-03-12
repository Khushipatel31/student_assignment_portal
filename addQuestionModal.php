<div class="modal fade" id="questionModal" tabindex="-1" aria-labelledby="facilityModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="questionModalLabel">
                    ADD QUESTION
                </h5>
                <input type="hidden" value="" />
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="dbQuery/insertQuestions.php" method="POST" id="addQuestionForm">
                    <div class="mb-3">
                        <label for="question" class="form-label">Question</label>
                        <textarea rows="5" cols="2" name="question" class="form-control" id="question"
                            aria-describedby="nameHelp"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="answer" class="form-label">Answer</label>
                        <textarea rows="5" cols="2" name="answer" class="form-control" id="answer"
                            aria-describedby="nameHelp"></textarea>
                    </div>
                   
                   
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary"
                    onclick="document.getElementById('addQuestionForm').submit()">Save changes</button>
            </div>

        </div>
    </div>
</div>
