i=0
while [ 1 ]
do
	#echo "hello"
	date
	if [ -f "cmd.txt" ]
	then
		let "i++"
		cmd=`cat ./cmd.txt`
		echo $cmd
		rm -f ./cmd.txt 
		#$cmd > "log$i" &
		$cmd &
	fi
	sleep 1
done
