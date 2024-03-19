<?php
$showCertificate = false; // Initialize the variable
$questions = [  // Define the array of questions outside of the POST check
    ["What is the primary goal of AWS Cloud Practitioner exam?", ["Assessing hands-on technical skills", "Demonstrating proficiency in a specific programming language", "Validating overall understanding of the AWS Cloud", "Testing server administration knowledge"], 2],
        ["Which AWS service is commonly used for scalable and cost-effective storage of objects, such as images and videos?", ["Amazon EC2", "Amazon S3", "Amazon RDS", "Amazon DynamoDB"], 1],
        ["What is the AWS Shared Responsibility Model?", ["AWS's commitment to share resources across accounts", "Joint responsibility for security and compliance, with AWS managing the infrastructure", "A model for sharing AWS certifications with team members", "A billing model for shared services"], 1],
        ["Which AWS service is used for launching and managing virtual servers in the cloud?", ["Amazon S3", "Amazon RDS", "Amazon EC2", "AWS Lambda"], 2],
        ["What is the purpose of Amazon VPC (Virtual Private Cloud)?", ["Storing and retrieving data", "Launching and managing virtual servers", "Isolating and securing networks within the AWS Cloud", "Automating code deployment"], 2],
        ["When designing for fault tolerance in AWS, what is the benefit of using Auto Scaling groups across multiple Availability Zones?", ["Increased latency", "Improved fault tolerance", "Reduced scalability", "Decreased cost"], 1],
        ["What is an Amazon Machine Image (AMI)?", ["A service for hosting static websites", "A template for launching EC2 instances", "A managed relational database service", "An object storage service"], 1],
        ["What AWS service provides a scalable and fully managed NoSQL database?", ["Amazon RDS", "Amazon DynamoDB", "Amazon Redshift", "AWS Lambda"], 1],
        ["What is the purpose of AWS CloudFormation?", ["Creating and managing virtual servers", "Defining and provisioning AWS infrastructure as code", "A domain name registration service", "Real-time monitoring of AWS resources"], 1],
        ["Which AWS service is designed for content delivery and acceleration, using a global network of edge locations?", ["Amazon S3", "Amazon CloudFront", "AWS Lambda", "Amazon VPC"], 1],
        ["In AWS, what is AWS Elastic Beanstalk?", ["A container orchestration service", "A serverless computing service", "A platform-as-a-service (PaaS) offering", "An object storage service"], 2],
        ["What is AWS CodeCommit used for?", ["Container orchestration", "Source code version control", "Serverless computing", "Object storage"], 1],
        ["Which AWS service allows you to run code without provisioning or managing servers?", ["Amazon EC2", "AWS Lambda", "Amazon S3", "Amazon RDS"], 1],
        ["What is AWS CodePipeline used for?", ["DNS management", "Continuous integration and continuous delivery (CI/CD)", "Log analysis", "Load balancing"], 1],
        ["Which AWS service enables developers to build and deploy applications in Docker containers?", ["Amazon ECS", "AWS Lambda", "Amazon S3", "Amazon RDS"], 0],
    // Add more questions as needed
];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Handle the quiz submission

    $totalQuestions = count($questions);
    $correctAnswers = 0;

    for ($i = 0; $i < $totalQuestions; $i++) {
        $selectedAnswer = $_POST["q$i"];
        if (isset($selectedAnswer) && $selectedAnswer == $questions[$i][2]) {
            $correctAnswers++;
        }
    }

    $percentage = ($correctAnswers / $totalQuestions) * 100;
    $passingPercentage = 75;

    if ($percentage >= $passingPercentage) {
        // If the student passes, show the certificate
        $showCertificate = true;

        // Student details (replace with your logic)
        $studentName = $_POST["studentName"];
        $courseName = "Cloud Technology";
        $completionTime = date("Y-m-d H:i:s");

        // Output certificate
        echo <<<HTML
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Congratulations!</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    text-align: center;
                }
                #certificate {
                    margin-top: 50px;
                    border: 2px solid #000;
                    padding: 20px;
                    width: 70%;
                    margin: auto;
                    background-color: #f9f9f9;
                }
                #certificate img {
                    margin-bottom: 20px;
                }
                #certificate h2 {
                    color: #0066cc;
                }
                #certificate p {
                    font-size: 16px;
                    line-height: 1.5;
                }
            </style>
        </head>
        <body>
            <h1>Congratulations, $studentName!</h1>
            <p>You have successfully completed the quiz for the course <strong>$courseName</strong> in the current semester .</p>
            <p>Your Score: $correctAnswers / $totalQuestions</p>
            <p>Percentage: $percentage%</p>
            <p>Completion Time: $completionTime</p>
            <div id="certificate">
                <img src="https://cutm.ac.in/wp-content/uploads/2020/01/fav-icon.png" alt="University Logo" width="50">
                <h2>Certificate of Completion</h2>
                <p>This is to certify that $studentName has successfully completed the quiz for the course $courseName in the current semester  on $completionTime.</p>
            </div>
        </body>
        </html>
HTML;
    } else {
        // If the student fails, show a message
        echo "<p>Sorry, you did not pass the quiz. Your Score: $correctAnswers / $totalQuestions</p>";
    }
    exit;
}
?>
<!-- The rest of your HTML form goes here -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        form {
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <h1>Quiz Page</h1>

    <form method="post">
        <?php
        // Display quiz questions
        foreach ($questions as $i => $question) {
            echo "<p>{$question[0]}</p>";
            foreach ($question[1] as $j => $option) {
                echo "<input type='radio' name='q$i' value='$j' required> $option<br>";
            }
        }
        ?>

        <br>
        <label for="studentName">Enter Your Name:</label>
        <input type="text" name="studentName" required>

        <br><br>
        <button type="submit">Submit Quiz</button>
    </form>
</body>
</html>




