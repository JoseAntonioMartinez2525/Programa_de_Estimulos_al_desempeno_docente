public function showForm2(Request $request)
{
    $teacherEmailFromUrl = $request->query('email'); // Retrieve email from query parameter

    // Validate the email
    if ($teacherEmailFromUrl && !filter_var($teacherEmailFromUrl, FILTER_VALIDATE_EMAIL)) {
        abort(400, 'Invalid email address');
    }

    return view('form2', [
        'teacherEmailFromUrl' => $teacherEmailFromUrl,
        // ...other variables...
    ]);
}
