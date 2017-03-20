import sys
file1=sys.argv[1]
with open(file1, 'r') as f:
    head = [next(f) for x in xrange(2)]

start=head[0].split(" ")
if not len(start)==2 or not start[0]=="start":
    print "Syntax Error 1"
    exit()
else:
    start=start[1].strip()
finish=head[1].split(" ")
if not len(finish)>=1 or not finish[0]=="finish":
    print "Syntax Error"
    exit()
else:
    finish=finish[1:]
states=[]
symbols=[]
transitions=[]
file1=sys.argv[1]
n=2
count=0
with open(file1) as f:
    count= sum(1 for _ in f)
f=open(file1,"r")
lines=f.readlines()
while not n==(count):
    line=lines[n]
    n+=1
    l=line.strip().split(" ")
    if(not len(l)==3):
            print "Syntax Error 2","line",l,len(l)
            exit()
    else:
            if l[0]    not in states:
                states.append(l[0])
            if l[1] not in symbols:
                symbols.append(l[1])
            if l[2]    not in states:
                states.append(l[2])
    transitions.append(l)
print "digraph G{ rankdir=LR"
print start+" [style=filled, fillcolor=yellow]"
for i in finish:
    print i+" [style=filled, fillcolor=green]"
for t in transitions:
    print t[0] + " -> " + t[2] + " [  label = \""+ t[1] +"\"];"

print "}"