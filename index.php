<?php include './corps/head.php'; ?>

        <form method="post" action="submit.php">
            <label>
                From:<br>
                <input type="text" required name="from"><br>
                to:<br>
                <input type="email" required name="to"><br>
                Subject:<br>
                <input type="text" name="subject" required><br>
                Your message:<br>
                <textarea required name="message" maxlength="500">Your message</textarea><br>
                <button type="submit" name="submit">Submit</button>
            </label>
        </form>

<?php include './corps/footer.php' ?>
