
<script>
	function sendEmail(email,dName,uName,adate,atime){
		Email.send({
             Host : "smtp.elasticemail.com",
            Username : "hmshospital150@gmail.com",
            Password : "47EA9D3EA4D59EFC2C1F937F3D1E5ABD448F",
            To : email,
            From : "hmshospital150@gmail.com",
            Subject : "your appointment has been booked",
            Body : dNam, uName,adate,atime,
            })
	}
</script>
