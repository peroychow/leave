import MySQLdb

# Open database connection
db = MySQLdb.connect("localhost", "root", "", "leave_report")

# Prepare a cursor object using cursor() method
cursor = db.cursor()

sql = "SELECT * FROM table_employee"

try:
	# Executed sql command
	cursor.execute(sql)
	# Fetch all the rows in a list of lists
	result = cursor.fetchall()
	for row in result:
		name = row[1]
		job_title = row[2]

		# Print fetched result
		print(name, job_title)
except:
	print "Error: unable to fetch data"

# Disconnect from server
db.close()