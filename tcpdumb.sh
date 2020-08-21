sudo tcpdump port http or host 127.0.0.1|egrep -i 'pwd=|password=|passwd=|pass=|user=|login=|user=|username=|pw=|passw=|passwd|pass:|user:|username:|password:|login:|pass |' >> capture.txt
