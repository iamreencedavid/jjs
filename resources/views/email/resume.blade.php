<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<table>

		<tr>
			<td style="padding:20px 0">
				We acknowledge receipt of your resume and application for a position at JJS and sincerely appreciate your interest in our company.	
			</td>
		</tr>

		<tr>
			<td style="padding:20px 0">
				We will screen all applicants and select candidates whose qualifications seem to meet our needs. We will carefully consider your application during the initial screening and will contact you if you are selected to continue in the recruitment process. We wish you every success.
			</td>
		</tr>

		<tr>
			<td style="padding:20px 0">
				To view your resume, kindly click the link below <br>
				<a href="{{ Config::get('app.url') }}storage/uploads/resume/{{ $data->resume }}">{{ Config::get('app.url') }}storage/uploads/resume/{{ $data->resume }}</a>
			</td>
		</tr>

		<tr>
			<td style="padding:20px 0">
				Thank You!
			</td>
		</tr>

	</table>
</body>
</html>