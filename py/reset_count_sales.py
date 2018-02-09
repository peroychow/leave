import MySQLdb

# Open database connection
db = MySQLdb.connect("localhost", "root", "", "leave_report")

# Prepare a cursor object using cursor() method
cursor = db.cursor()

sql = "UPDATE table_employee SET remaining_leave=0 WHERE department=1"

try:
	# Executed sql command
	cursor.execute(sql)
	# Commit your changes in databases
	db.commit()
	
except:
	# Rollback in case there is any error
	db.rollback()

# Disconnect from server
db.close()	