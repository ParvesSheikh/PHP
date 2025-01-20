-- Insert Query 
INSERT INTO `details`
(`firstName`, `lastName`, `City`, `Phone`, `Email`, `Salary`)
VALUES
('Joe','Root','London','3845826','root@gmail.com','85000'),
('John', 'Doe', 'New York', '123-456-7890', 'john.doe@example.com', 70000.00),
('Jane', 'Smith', 'Los Angeles', '987-654-3210', 'jane.smith@example.com', 75000.00),
('Michael', 'Johnson', 'Chicago', '555-123-4567', 'michael.johnson@example.com', 68000.00),
('Emily', 'Davis', 'Houston', '444-567-8901', 'emily.davis@example.com', 72000.00),
('David', 'Brown', 'Phoenix', '333-222-1111', 'david.brown@example.com', 69000.00),
('Olivia', 'Taylor', 'Philadelphia', '666-777-8888', 'olivia.taylor@example.com', 71000.00),
('James', 'Miller', 'San Antonio', '999-000-1111', 'james.miller@example.com', 73000.00),
('Sophia', 'Wilson', 'San Diego', '222-333-4444', 'sophia.wilson@example.com', 76000.00),
('Liam', 'Moore', 'Dallas', '555-666-7777', 'liam.moore@example.com', 74000.00),
('Isabella', 'Anderson', 'San Jose', '888-999-0000', 'isabella.anderson@example.com', 68000.00),
('William', 'Thomas', 'Austin', '123-321-4567', 'william.thomas@example.com', 69000.00),
('Mia', 'Jackson', 'San Francisco', '654-321-7890', 'mia.jackson@example.com', 77000.00),
('Lucas', 'White', 'Columbus', '321-654-9870', 'lucas.white@example.com', 67000.00),
('Amelia', 'Harris', 'Fort Worth', '111-222-3333', 'amelia.harris@example.com', 73000.00),
('Benjamin', 'Martin', 'Charlotte', '444-555-6666', 'benjamin.martin@example.com', 75000.00),
('Charlotte', 'Thompson', 'Detroit', '777-888-9999', 'charlotte.thompson@example.com', 72000.00),
('Henry', 'Garcia', 'El Paso', '000-111-2222', 'henry.garcia@example.com', 68000.00),
('Evelyn', 'Martinez', 'Memphis', '333-444-5555', 'evelyn.martinez@example.com', 74000.00),
('Alexander', 'Robinson', 'Baltimore', '666-777-8888', 'alexander.robinson@example.com', 71000.00),
('Harper', 'Clark', 'Boston', '999-000-1111', 'harper.clark@example.com', 76000.00);

--  Delete Query

DELETE FROM `details`WHERE id = 32 ;

-- Update Query

UPDATE `details`
SET `salary` = 75000 WHERE id = 26 ;

-- SELECT ALL  

SELECT * FROM `details` ;

-- SELECT Using Where

SELECT * FROM `details` WHERE `city` = 'Chicago' ;

-- SELECT With Sort 

SELECT * FROM `details` ORDER BY id DESC ; 

-- SELECT With Sort 

SELECT * FROM `details` ORDER BY id ASC ; 

-- SELECT With Limit 

SELECT * FROM `details` LIMIT 4

-- SELECT With GROUP

SELECT `city` FROM `details` GROUP BY `city` ;

-- Select Unique 

SELECT DISTINCT City FROM `details` ;

-- MAX

SELECT MAX(salary) AS highest FROM `details` 

SELECT * FROM `details` WHERE `salary` = (SELECT MAX(salary) FROM `details`); 

-- MIN

SELECT MIN(salary) AS lowest FROM `details` ;

SELECT * FROM `details` WHERE `salary` = (SELECT MIN(salary) FROM `details`) ;

-- AVG

SELECT AVG(salary) AS averageSalary FROM `details` ;

-- SUM

SELECT Sum(salary) as SumSalary FROM `details` ;

-- COUNT
SELECT COUNT(*) AS Total FROM `details` ;