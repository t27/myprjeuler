num=[]
num.append(1)
ansnum=[]
numlen=1
tempnum=0
for i in range(1000):
  for j in range(numlen):
	tempnum+=num[j]+num[j]
	ansnum.append(tempnum%10)
	tempnum/=10
  while tempnum>0:
	ansnum.append(tempnum%10)
	tempnum/=10
  numlen=len(ansnum)
  num=ansnum[:]
  ansnum=[]
  
num.reverse()
sum1=0
for elem in num:
  sum1+=elem
print sum1