select school_name, COUNT(inagurated_date) as count_inaugurated_date from school where inagurated_date = '2020-01-25' GROUP BY school_name;