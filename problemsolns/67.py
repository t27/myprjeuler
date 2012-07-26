


mainlist=[]

f=open("67triangle.txt")
fstr=f.read()
strlist=fstr.split('\n')
for line in strlist:
  mainlist.append(line.split(' '))
mainlist.pop()
n=len(mainlist)
#print mainlist
for i in range(n-1,-1,-1):
  for j in range(0,i):
	#print str(i)+"   "+str(j)
	mainlist[i-1][j]=str(max( int(mainlist[i][j])+int(mainlist[i-1][j]) , int(mainlist[i][j+1])+int(mainlist[i-1][j]) ))

print mainlist[0]
  
  