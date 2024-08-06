
        <h1>Student Management System</h1>

            <strong>!!! NB:</strong> use username: <strong>matthias</strong> while password must be: <strong>matthias@123</strong> on the login.php interface
        <h2>Overview</h2>
        <p>The Student Management System is a web-based application built using PHP and MySQL for managing student records in a school. It allows administrators to log in, view, add, edit, and delete student records through a user-friendly web interface. The system ensures secure access with session-based authentication and provides a responsive design using Bootstrap.</p>

        <h2>Features</h2>
        <ul>
            <li><strong>User Authentication:</strong> Secure login for administrators.</li>
            <li><strong>CRUD Operations:</strong> Create, Read, Update, and Delete student records.</li>
            <li><strong>Validation:</strong> Ensures data integrity with validation for email uniqueness and phone number format.</li>
            <li><strong>Responsive Design:</strong> Mobile-friendly interface using Bootstrap.</li>
            <li><strong>Icons:</strong> Utilizes Font Awesome icons for intuitive navigation and actions.</li>
        </ul>

        <h2>Installation</h2>
        <h3>Prerequisites</h3>
        <ul>
            <li>PHP (version 7.4 or higher)</li>
            <li>MySQL (version 5.7 or higher)</li>
            <li>A web server like Apache (XAMPP or similar)</li>
        </ul>

        <h3>Setup</h3>
        <ol>
            <li><strong>Clone the Repository</strong>
                <pre><code>git clone https://github.com/jadenmatth/matthias_22RP02216.git
cd matthias_22RP02216</code></pre>
            </li>
            <li><strong>Configure the Database</strong>
                <ul>
                    <li>Create a MySQL database named <code>student_management</code>.</li>
                    <li>Import the <code>student_management.sql</code> file from the <code>database</code> folder using phpMyAdmin.</li>
                </ul>
            </li>
            <li><strong>Set Up Your Web Server</strong>
                <ul>
                    <li>Place the project files in the web server's document root directory (e.g., <code>htdocs</code> for XAMPP).</li>
                    <li>Ensure that your server is running and navigate to <a href="http://localhost/student_management_system">http://localhost/student_management_system</a> in your web browser.</li>
                </ul>
            </li>
        </ol>

        <h2>Usage</h2>
        <h3>Log In</h3>
        <p>Visit <code>login.php</code> to log in as an administrator. Enter the following credentials to access the dashboard:</p>
        <ul>
            <li><strong>Username:</strong> matthias</li>
            <li><strong>Password:</strong> matthias@123</li>
        </ul>

        <h3>Manage Students</h3>
        <ul>
            <li><strong>View Students:</strong> Navigate to <code>index.php</code> to see the list of students.</li>
            <li><strong>Add Student:</strong> Use <code>add_student.php</code> to add new student records.</li>
            <li><strong>Edit Student:</strong> Click the edit button next to a student's record to modify their details.</li>
            <li><strong>Delete Student:</strong> Click the delete button to remove a student record.</li>
        </ul>

        <h3>Validation Rules</h3>
        <ul>
            <li><strong>Email:</strong> Must be unique across all student records.</li>
            <li><strong>Phone Number:</strong> Must start with "07" and be 10 digits long.</li>
        </ul>

