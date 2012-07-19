opno=int(raw_input(''))
ratinglist=[]
listsize=0
for i in range(opno):
	str=raw_input('')
	if str[0]=='1':
		list=str.split(' ')
		listnum=[]
		for ele in list: listnum.append(int(ele))
		ratinglist.append(listnum[1])
		listsize+=1
	if str[0]=='2':
		ratinglist.sort(reverse=True)
		n=int(listsize/3)
		if n>0:
			print ratinglist[n]
		else: print "No reviews yet"
