colrow=raw_input("")
cr=colrow.split(' ')
row=int(cr[0])
col=int(cr[1])
matr=[]
for i in range(row):
	rowstr=raw_input("")
	listchar=rowstr.split(' ')
	listnum=[]
	for i in listchar: listnum.append(int(i))
	matr.append(listnum)
	#for j in range(col):
		#matr[i].append(int(rowstr[j*2]))
minlist=[]
for rows in matr:
	minlist.append(min(rows))
#	rowmin=rows[0]
#	for cols in rows:
#		if cols<rowmin:
#			rowmin=cols
	

for rowno in range(row):
	for colno in range(col):
		if matr[rowno][colno]==minlist[rowno]:
			colmax=0
			for rows in matr:
				if rows[colno]>colmax: colmax=rows[colno]
			if colmax==matr[rowno][colno]:
				print colmax
				import sys
				sys.exit(0)
print "GUESS"
			
#print matr
#print minlist
