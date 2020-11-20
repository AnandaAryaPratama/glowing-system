CREATE TABLE users (
    id int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
    name varchar(100) NOT NULL COMMENT 'Name',
    email varchar(255) NOT NULL COMMENT 'Email Address',
    contact_no varchar(50) NOT NULL COMMENT 'Contact No',
    created_at varchar(20) NOT NULL COMMENT 'Created date',
    PRIMARY KEY (id)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='datatable demo table' AUTO_INCREMENT=1;
 
 
INSERT INTO users(id, name, email, contact_no, created_at) VALUES
  (1, 'Team', 'info@test.com', '9000000001', '2019-01-01'),
  (2, 'Admin', 'admin@test.com', '9000000002', '2019-01-02'),
  (3, 'User', 'user@test.com', '9000000003', '2019-01-03'),
  (4, 'Editor', 'editor@test.com', '9000000004', '2019-01-04'),
  (5, 'Writer', 'writer@test.com', '9000000005', '2019-01-05'),
  (6, 'Contact', 'contact@test.com', '9000000006', '2019-01-06'),
  (7, 'Manager', 'manager@test.com', '9000000007', '2019-01-07'),
  (8, 'John', 'john@test.com', '9000000055', '2019-01-08'),
  (9, 'Merry', 'merry@test.com', '9000000088', '2019-01-09'),
  (10, 'Keliv', 'kelvin@test.com', '9000550088', '2019-01-10'),
  (11, 'Herry', 'herry@test.com', '9050550088', '2019-01-11'),
  (12, 'Mark', 'mark@test.com', '9050550998', '2019-01-12');