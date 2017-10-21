import pandas as pd
import numpy as np
import pymysql
pymysql.install_as_MySQLdb()
import sys
import datetime as dt
import pandas, datetime
from time import gmtime,strftime
from calendar import timegm




# Connection to MySQL Database to get the data
def ConnDB:
	conn = pymysql.connect(host = '172.16.30.86', port= 3306, user ='root', passwd = 'q1w2e3r4', db = 'test_DB')

	cursor1 = conn.cursor()
	cursor2 = conn.cursor()

	cursor1.execute('SELECT sdate,ROUND((max_temp+min_temp)/2,1), sensor FROM daily_temp ORDER BY sdate ASC')
	cursor2.execute('SELECT DISTINCT block,vid,planting, harvesting FROM toguchi_plant WHERE  planting IN (SELECT Planting FROM toguchi_plant) ORDER BY planting DESC')
	result1 = cursor1.fetchall()
	result2 = cursor2.fetchall()

	df1 = pd.DataFrame( [[ij for ij in i] for i in result1] )
	df2 = pd.DataFrame( [[ij for ij in i] for i in result2] )

	df1.rename(columns={0: 'Date', 1:'Mean_T', 2:'sensor'}, inplace=True);
	df2.rename(columns={0: 'block', 1: 'vid', 2: 'startPlant', 3: 'startHarv'}, inplace=True);
	if cursor1 and conn:
    	cursor1.close()
	if cursor2 and conn:
    	cursor2.close()
    	conn.close()

    #return df1 ,df2
