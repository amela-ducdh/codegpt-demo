function checkAdmin(req, resp, next) {
    const username = req.session.user_id;
    if (!username) {
        resp.redirect('/login.html'); //Redirect to Login
    } 
    else {
        const user = db.fetchUser(username);
        if (user.isAdmin) {
            next(); // Next middleware stage or handler
        } 
        else {
            resp.redirect('/login.html'); //Redirect to Login
            return;
        }
    }
}