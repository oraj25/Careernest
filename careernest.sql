-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2024 at 10:50 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `careernest`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_ID` int(11) NOT NULL,
  `Admin_name` varchar(255) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_ID`, `Admin_name`, `Email`, `password`) VALUES
(1, 'omal', 'omal@gmail.com', '123'),
(3, 'Dulan', 'dulan@gmail.com', 'Dulan@1234'),
(4, 'Ushan', 'ushan@gmail.com', 'Ushan@1234'),
(5, 'Kalhara', 'kalhara@gmail.com', 'Kalhara@1234'),
(6, 'Poojani', 'poojani@gmail.com', 'Poojani@1234');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `job` varchar(20) NOT NULL,
  `skill` varchar(20) NOT NULL,
  `experiance` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `email`, `password`, `job`, `skill`, `experiance`) VALUES
('E101', 'Tharu', 'kasthu@gmail.com', 'Poojani@123', 'Writer', 'Good', 'Good'),
('E103', 'Tharu', 'Tharu@gmail.com', 'Imesh@123', 'Driver', 'Excellent', 'Excellent'),
('', 'John Doe', 'john.doe@gmail.com', 'DoePass123!', 'Software Engineer', 'Java, Python, SQL', '5'),
('', 'Emma Smith', 'emma.smith@gmail.com', 'EmmaSecure!45', 'Marketing Manager', 'SEO, Content Marketi', '7'),
('', 'Michael Johnson', 'michael.j@gmail.com', 'Johnson@2024', 'Project Manager', 'Project Planning, Ri', '10'),
('', 'Sophia Brown', 'sophia.brown@gmail.c', 'BrownSecure123', 'Education Specialist', 'Curriculum Design, e', '6'),
('', 'William Davis', 'william.davis@gmail.', 'WillDavis#2024', 'Mechanical Engineer', 'CAD, SolidWorks, Man', '8'),
('', 'Olivia Garcia', 'olivia.garcia@gmail.', 'Olivia2024#', 'UI/UX Designer', 'Wireframing, Prototy', '4'),
('', 'James Martinez', 'james.martinez@gmail', 'James@Secure45', 'Financial Analyst', 'Data Analysis, Excel', '6'),
('', 'Ava Lopez', 'ava.lopez@gmail.com', 'AvaLopez@2024', 'Agricultural Scienti', 'Research, Crop Scien', '7'),
('', 'Benjamin Wilson', 'benjamin.wilson@gmai', 'WilsonSecure123', 'Biotechnologist', 'Genetic Engineering,', '9'),
('', 'Mia Rodriguez', 'mia.rodriguez@gmail.', 'MiaRod@2024', 'Software Developer', 'JavaScript, React, N', '5'),
('afa', 'safasf', 'raj@gmail.com', 'WFw', 'asfa', 'asff', 'afasf'),
('dsfv', 'sdvs', 'sddv', 'dsvs', 'dv', 'dsv', 'dsv');

-- --------------------------------------------------------

--
-- Table structure for table `employer_profiles`
--

CREATE TABLE `employer_profiles` (
  `id` int(11) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `employer_first_name` varchar(20) NOT NULL,
  `employer_last_name` varchar(20) NOT NULL,
  `company_email` varchar(25) NOT NULL,
  `personal_email` varchar(25) DEFAULT NULL,
  `company_phone` varchar(10) DEFAULT NULL,
  `personal_phone` varchar(10) DEFAULT NULL,
  `industry` varchar(255) DEFAULT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `facebook_link` varchar(100) DEFAULT NULL,
  `linkedin_link` varchar(100) DEFAULT NULL,
  `gender` enum('Male','Female') DEFAULT NULL,
  `company_details` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employer_profiles`
--

INSERT INTO `employer_profiles` (`id`, `company_name`, `employer_first_name`, `employer_last_name`, `company_email`, `personal_email`, `company_phone`, `personal_phone`, `industry`, `country`, `city`, `facebook_link`, `linkedin_link`, `gender`, `company_details`) VALUES
(26, 'Tech Innovators', 'Saman', 'Perera', 'saman@techinnovators.com', 'johndoe@gmail.com', '0776788900', '0723456789', 'tech', 'Sri Lanka', 'Colombo', 'facebook.com/johndoe', 'linkedin.com/in/johndoe', 'Male', 'Leading the tech revolution'),
(27, 'Green Energy Corp', 'Emma', 'Smith', 'emma@greenenergy.com', 'emmasmith@gmail.com', '123-123-12', '987-987-98', 'Energy', 'USA', 'Los Angeles', 'facebook.com/emmasmith', 'linkedin.com/in/emmasmith', 'Female', 'Pioneering in sustainable energy solutions'),
(28, 'Health First', 'Michael', 'Johnson', 'michael@healthfirst.com', 'michaelj@gmail.com', '111-222-33', '555-666-77', 'Healthcare', 'Canada', 'Toronto', 'facebook.com/michaelj', 'linkedin.com/in/michaeljohnson', 'Male', 'Healthcare provider focused on patient wellness'),
(29, 'Edu World', 'Sophia', 'Brown', 'sophia@eduworld.com', 'sophiab@gmail.com', '444-555-66', '888-999-11', 'Education', 'UK', 'London', 'facebook.com/sophiab', 'linkedin.com/in/sophiabrown', 'Female', 'Global leader in online education'),
(30, 'Tech Solutions', 'William', 'Davis', 'william@techsolutions.com', 'williamdavis@gmail.com', '222-333-44', '777-888-99', 'IT', 'India', 'Mumbai', 'facebook.com/williamdavis', 'linkedin.com/in/williamdavis', 'Male', 'Providing IT solutions globally'),
(31, 'AutoDrive', 'Olivia', 'Garcia', 'olivia@autodrive.com', 'oliviagarcia@gmail.com', '555-666-77', '333-444-55', 'Automobile', 'Germany', 'Berlin', 'facebook.com/oliviag', 'linkedin.com/in/oliviagarcia', 'Female', 'Innovating in autonomous vehicles'),
(32, 'FinConsult', 'James', 'Martinez', 'james@finconsult.com', 'jamesmartinez@gmail.com', '111-444-77', '222-555-88', 'Finance', 'France', 'Paris', 'facebook.com/jamesm', 'linkedin.com/in/jamesmartinez', 'Male', 'Financial consulting firm helping businesses grow'),
(33, 'AgriTech', 'Ava', 'Lopez', 'ava@agritech.com', 'avalopez@gmail.com', '777-888-99', '555-666-77', 'Agriculture', 'Brazil', 'São Paulo', 'facebook.com/avalopez', 'linkedin.com/in/avalopez', 'Female', 'Bringing technology to the agriculture industry'),
(34, 'HealthGen', 'Benjamin', 'Wilson', 'benjamin@healthgen.com', 'benjaminwilson@gmail.com', '222-333-44', '111-222-33', 'Biotechnology', 'Japan', 'Tokyo', 'facebook.com/benjaminw', 'linkedin.com/in/benjaminwilson', 'Male', 'Biotech company specializing in genetic research'),
(35, 'SoftDev', 'Mia', 'Rodriguez', 'mia@softdev.com', 'miarodriguez@gmail.com', '444-555-66', '777-888-99', 'Software', 'Australia', 'Sydney', 'facebook.com/miarodriguez', 'linkedin.com/in/miarodriguez', 'Female', 'Software development company for innovative solutions'),
(36, 'omal', 'Royal', 'marketing', 'royal153@gmail.com', 'raj@gmail.com', '9+556+5', '633', 'construction', 'Sri Lanka', 'mathul', 'https://www.perplexity.ai/', 'https://www.perplexity.ai/', 'Male', 'XSHRSHSH');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `Inquiry_ID` int(11) NOT NULL,
  `User_Name` varchar(225) NOT NULL,
  `User_Email` varchar(225) DEFAULT NULL,
  `Phone_Number` varchar(20) DEFAULT NULL,
  `Message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`Inquiry_ID`, `User_Name`, `User_Email`, `Phone_Number`, `Message`) VALUES
(4, 'John Doe', 'john.doe@gmail.com', '555-123-4567', 'I would like to inquire about your services for a software project.'),
(5, 'Emma Smith', 'emma.smith@gmail.com', '555-987-6543', 'Could you provide more details about your marketing strategies?'),
(6, 'Michael Johnson', 'michael.j@gmail.com', '555-234-5678', 'I am interested in collaborating on a new healthcare project.'),
(7, 'Sophia Brown', 'sophia.brown@gmail.com', '555-345-6789', 'Can you assist with online education tools for my organization?'),
(8, 'William Davis', 'william.davis@gmail.com', '555-456-7890', 'I need support with a mechanical design project. How do I proceed?'),
(9, 'Olivia Garcia', 'olivia.garcia@gmail.com', '555-567-8901', 'I would like to schedule a consultation for UX/UI design.'),
(10, 'James Martinez', 'james.martinez@gmail.com', '555-678-9012', 'Can you provide financial consulting for my startup?');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `Template` enum('Local','Foreign','Online') NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `job_type` varchar(255) NOT NULL,
  `requirements` varchar(255) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `deadline` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `Template`, `company_name`, `location`, `job_title`, `job_type`, `requirements`, `salary`, `description`, `contact_no`, `email`, `deadline`) VALUES
(2, 'Foreign', 'Creative Agency', 'Los Angeles, CA', 'Marketing Manager', 'Full-Time', 'Bachelor Degree', '95000', 'Lead the marketing team to design and implement campaigns.', '555-987-6543', 'careers@creativeagency.com', '2024-12-15'),
(3, 'Foreign', 'Global Corp', 'Chicago, IL', 'HR Specialist', 'Full-Time', 'Bachelor Degree', '55000', 'Assist with recruitment, payroll, and employee relations.', '555-564-7890', 'hr@globalcorp.com', '2024-11-25'),
(4, 'Foreign', 'Data Insights', 'Austin, TX', 'Data Analyst', 'Full-Time', 'Bachelor Degree', '78000', 'Analyze large datasets to provide business insights.', '555-765-4321', 'jobs@datainsights.com', '2024-12-10'),
(5, 'Foreign', 'Retail Networks', 'San Francisco, CA', 'Sales Executive', 'Full-Time', 'Bachelor Degree', '60000', 'Drive sales efforts to meet business targets.', '555-321-9876', 'sales@retailnetworks.com', '2024-12-01'),
(12, 'Local', 'Tech Solutions', 'San Francisco, CA', 'Software Engineer', 'Full-Time', 'Bachelor Degree in Computer Science', '120000', 'Develop and maintain web applications for clients...', '555-123-4567', 'hr@techsolutions.com', '2024-11-30'),
(13, 'Local', 'Green Energy Corp', 'Denver, CO', 'Project Manager', 'Contract', 'MBA or PMP certification', '85000', 'Manage renewable energy projects from start to completion...', '555-654-3210', 'jobs@greenenergycorp.com', '2024-10-25'),
(14, 'Local', 'Health First', 'Miami, FL', 'Nurse Practitioner', 'Part-Time', 'Registered Nurse License', '70000', 'Provide healthcare services to patients in a clinic setting...', '555-432-1098', 'careers@healthfirst.com', '2024-11-15'),
(15, 'Local', 'AutoDrive', 'Detroit, MI', 'Automotive Engineer', 'Full-Time', 'Bachelor Degree in Mechanical Engineering', '110000', 'Design and develop automotive systems for self-driving cars...', '555-908-7654', 'recruit@autodrive.com', '2024-12-01'),
(16, 'Online', 'Edu World', 'New York, NY', 'Instructional Designer', 'Full-Time', 'Bachelor Degree', '75000', 'Create engaging learning materials for online courses...', '555-876-5432', 'jobs@eduworld.com', '2024-12-20'),
(17, 'Local', 'FinConsult', 'Chicago, IL', 'Financial Analyst', 'Full-Time', 'Bachelor Degree in Finance or Accounting', '95000', 'Analyze financial data and create reports for clients...', '555-765-4321', 'recruitment@finconsult.com', '2024-11-10'),
(18, 'Online', 'AgriTech', 'Dallas, TX', 'Agricultural Scientist', 'Full-Time', 'Bachelor Degree', '105000', 'Conduct research on sustainable farming techniques...', '555-543-2198', 'jobs@agritech.com', '2024-11-25'),
(19, 'Online', 'SoftDev', 'Austin, TX', 'UI/UX Designer', 'Full-Time', 'Bachelor Degree', '65000', 'Design user interfaces and user experiences for web apps...', '555-219-8765', 'freelance@softdev.com', '2024-12-05'),
(20, 'Local', 'HealthGen', 'Boston, MA', 'Biotech Researcher', 'Full-Time', 'PhD in Biotechnology or related field', '115000', 'Lead research projects in genetic engineering and biotech...', '555-123-0987', 'hr@healthgen.com', '2024-12-10');

-- --------------------------------------------------------

--
-- Table structure for table `job_seeker_profile`
--

CREATE TABLE `job_seeker_profile` (
  `Seeker_ID` int(11) NOT NULL,
  `First_Name` varchar(50) DEFAULT NULL,
  `Last_Name` varchar(50) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Country` varchar(50) DEFAULT NULL,
  `City` varchar(50) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `Job_Category` varchar(50) DEFAULT NULL,
  `Contact` bigint(20) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Experience` varchar(100) DEFAULT NULL,
  `Description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_seeker_profile`
--

INSERT INTO `job_seeker_profile` (`Seeker_ID`, `First_Name`, `Last_Name`, `DOB`, `Age`, `Country`, `City`, `Gender`, `Job_Category`, `Contact`, `Email`, `Experience`, `Description`) VALUES
(16, 'John', 'Doe', '1990-01-15', 34, 'USA', 'New York', 'Male', 'Software Engineering', 1234567890, 'john.doe@example.com', '5', 'Experienced software developer with a background in web development.'),
(17, 'Jane', 'Smith', '1988-03-22', 36, 'Canada', 'Toronto', 'Female', 'Data Analysis', 2345678901, 'jane.smith@example.com', '7', 'Data analyst with expertise in data visualization and statistical analysis.'),
(18, 'Michael', 'Johnson', '1992-05-10', 32, 'UK', 'London', 'Male', 'Project Management', 3456789012, 'michael.j@example.com', '4', 'Project manager with experience in Agile methodologies.'),
(19, 'Emily', 'Davis', '1985-07-30', 39, 'Australia', 'Sydney', 'Female', 'Marketing', 4567890123, 'emily.davis@example.com', '6', 'Digital marketing specialist with a focus on social media.'),
(20, 'David', 'Wilson', '1995-11-12', 28, 'USA', 'Los Angeles', 'Male', 'Graphic Design', 5678901234, 'david.wilson@example.com', '3', 'Creative graphic designer with a passion for branding.'),
(21, 'Sophia', 'Garcia', '1993-02-20', 31, 'Spain', 'Madrid', 'Female', 'Human Resources', 6789012345, 'sophia.garcia@example.com', '5', 'HR professional skilled in talent acquisition and employee engagement.'),
(22, 'James', 'Martinez', '1980-04-15', 44, 'Mexico', 'Mexico City', 'Male', 'Sales', 7890123456, 'james.martinez@example.com', '10', 'Sales executive with a proven track record in achieving targets.'),
(23, 'Olivia', 'Hernandez', '1997-08-25', 27, 'USA', 'Chicago', 'Female', 'Finance', 8901234567, 'olivia.hernandez@example.com', '2', 'Junior financial analyst with a strong analytical background.'),
(24, 'Benjamin', 'Lopez', '1989-12-05', 34, 'USA', 'Houston', 'Male', 'Customer Service', 9012345678, 'benjamin.lopez@example.com', '8', 'Customer service representative with excellent communication skills.'),
(25, 'Mia', 'Wilson', '1991-06-10', 33, 'Canada', 'Vancouver', 'Female', 'Web Development', 123456789, 'mia.wilson@example.com', '4', 'Full stack developer with expertise in JavaScript and Python.'),
(26, 'Alexander', 'Anderson', '1987-10-14', 36, 'UK', 'Birmingham', 'Male', 'Engineering', 1234567890, 'alexander.a@example.com', '7', 'Mechanical engineer with experience in product design.'),
(27, 'Isabella', 'Thomas', '1994-09-22', 30, 'Australia', 'Melbourne', 'Female', 'Nursing', 2345678901, 'isabella.thomas@example.com', '5', 'Registered nurse with a focus on patient care and support.'),
(28, 'Liam', 'Taylor', '1983-01-30', 41, 'USA', 'Philadelphia', 'Male', 'Education', 3456789012, 'liam.taylor@example.com', '10', 'Educator with experience in curriculum development.'),
(29, 'Ava', 'Moore', '1996-03-15', 28, 'Canada', 'Ottawa', 'Female', 'Content Writing', 4567890123, 'ava.moore@example.com', '3', 'Content writer with expertise in SEO and digital marketing.'),
(30, 'Ethan', 'Jackson', '1982-07-19', 42, 'USA', 'Dallas', 'Male', 'IT Support', 5678901234, 'ethan.jackson@example.com', '15', 'IT support specialist with extensive troubleshooting experience.'),
(31, 'Charlotte', 'Martin', '1990-11-05', 33, 'Spain', 'Barcelona', 'Female', 'Event Planning', 6789012345, 'charlotte.martin@example.com', '6', 'Event planner with a passion for creating memorable experiences.'),
(32, 'Lucas', 'Lee', '1993-02-28', 31, 'Australia', 'Brisbane', 'Male', 'Research', 7890123456, 'lucas.lee@example.com', '4', 'Research scientist with a focus on renewable energy.'),
(33, 'Amelia', 'Walker', '1995-04-11', 29, 'USA', 'Phoenix', 'Female', 'Legal', 8901234567, 'amelia.walker@example.com', '2', 'Paralegal with experience in family law.'),
(34, 'Mason', 'Hall', '1988-08-20', 36, 'Canada', 'Calgary', 'Male', 'Architecture', 9012345678, 'mason.hall@example.com', '7', 'Architect with a keen eye for detail and sustainable design.');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `Report_ID` int(11) NOT NULL,
  `Time_Period` varchar(50) DEFAULT NULL,
  `Report_Type` varchar(100) DEFAULT NULL,
  `Details` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`Report_ID`, `Time_Period`, `Report_Type`, `Details`) VALUES
(2, '11.09 AM', 'Error', 'I can\'t see any error in this website'),
(3, '2024-01', 'Monthly', 'January Report Details'),
(4, '2024-02', 'Monthly', 'February Report Details'),
(5, '2024-03', 'Monthly', 'March Report Details'),
(6, '2024-04', 'Quarterly', 'Q1 Report Details'),
(7, '2024-05', 'Monthly', 'May Report Details');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `U_email` varchar(225) NOT NULL,
  `password_hash` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `U_email`, `password_hash`) VALUES
(54, 'raj@gmail.com', '$2y$10$cGfHCwHYI89qTV6xjLflUeu2npuGul1BZ2TzISulWSo8rCwg0UnBW'),
(55, 'kithmuthubandara@gmail.com', '$2y$10$ly4NpLDWkGrfvfU9ftC56epKGI7NghnkUf5kTlIS4fTioKn9QBnMa'),
(56, 'dilanbandara@gmail.com', '$2y$10$mLzRd0lgp3trfKB136Hureu/JTH6/YYjYO5wTBqZQwfN9/Q80B5ie'),
(57, 'yasithashavinda@gmail.com', '$2y$10$UyiJpUO//vBkLW/W16Gk7O9nIT74sc488PARMcE3rX7NcGRe1pItK'),
(58, 'sanjangunasekara@gmail.com', '$2y$10$ULp9jhvl2MEgXjqH9klaF.5ZkNjprZlhpqCnRSNMHE.z0lKKZL8.C'),
(59, 'sanoshikumarasinghe@gmail.com', '$2y$10$sc1UHX6P7jlOZpYmWr5OUOL3Bc.Is7jGjImOPN3QRIxtRwa1nVsom');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_ID`);

--
-- Indexes for table `employer_profiles`
--
ALTER TABLE `employer_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`Inquiry_ID`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_seeker_profile`
--
ALTER TABLE `job_seeker_profile`
  ADD PRIMARY KEY (`Seeker_ID`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`Report_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employer_profiles`
--
ALTER TABLE `employer_profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `Inquiry_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `job_seeker_profile`
--
ALTER TABLE `job_seeker_profile`
  MODIFY `Seeker_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `Report_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
