

function checkAdmin(req, resp, next) {
    const username = req.session.user_id;
    if (!username) {
        resp.redirect('/login.html'); //Redirect to Login
        return;
    } 

    const user = db.fetchUser(username);
    if (user.isAdmin) {
        next(); // Next middleware stage or handler
    } 
    else {
        resp.redirect('/login.html'); //Redirect to Login
        return;
    } 
} 

// The code has been refactored to reduce the amount of nested conditionals and make it easier to read and understand. The code now checks for the username in the first conditional statement and returns if it is not found, instead of continuing into a nested conditional statement that checks for the user's admin status.