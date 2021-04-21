CREATE DATABASE test_ide;
CREATE TABLE school (
    id INTEGER primary key,
    school_code VARCHAR(20),
    school_name VARCHAR(100),
    inagurated_date DATE,
    unique(school_code)
);
