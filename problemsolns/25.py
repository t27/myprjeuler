
a,b = 1,1
count=1
while True:
  a,b = b,a+b
  count+=1
  if len(str(a))==1000:
	print count
	break
  




