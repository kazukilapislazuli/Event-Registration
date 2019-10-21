import sys
import csv 
  
fields = ['First Name', 'Last Name' ,'College','Email ID','Phone Number','Branch','Technical Event','Non - Technical Event','Fun Events'] 
data1=sys.argv[1]
data2=sys.argv[2]
data3=sys.argv[3]
data4=sys.argv[4]
data5=sys.argv[5]
data5=sys.argv[6]
data5=sys.argv[7]
data5=sys.argv[8]
data5=sys.argv[9]
# data rows of csv file 
rows = [ [data1, data2, data3, data4, data5, data6, data7, data8, data9] ] 
  
# name of csv file 
filename = "record.csv"
  
# writing to csv file 
with open(filename, 'a') as csvfile: 
    # creating a csv writer object 
    csvwriter = csv.writer(csvfile) 
      
    # writing the fields 
    #csvwriter.writerow(fields) 
      
    # writing the data rows 
    csvwriter.writerows(rows)


#print(result)
