import time
t0 = time.time()
namelist1=open("22-names.txt").read().split(",")
namelist2=[]
for nam in namelist1:
  namelist2.append(nam[1:len(nam)-1])
#namelist2=["COLIN","COLIN"]
value=0
posn=0
maxscore=0
namelist2.sort()
for name in namelist2:
  posn+=1
  value=0
  #print name
  for i in range(len(name)):
	value+=(ord(name[i])-ord('A')+1)
  maxscore+=(value*posn)
print maxscore
print time.time() - t0, "seconds"