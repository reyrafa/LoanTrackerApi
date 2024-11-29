==============================
====== Loan Tracker Api ======
==============================

==========================================================
For Login
    method: post
   endpoint : https://loantracker.oicapp.com/api/v1/login
   body : {
    company_id : (String, required),
    password :
   }
   success response: {
    token : **token**
   }
   error response: {
    message: credentials do not match
   }

============================================================
============================================================
For Logout
    method: post
    endpoint : https://loantracker.oicapp.com/api/v1/logout
    Authorization Needed : {
        Bearer Token : **token**
    }
    success response : {
        token : **token**
    }
    error response: {
        message: credentials do not match
    }
==============================================================
==============================================================
For Getting Branches with BM
    method: get
    endpoint : https://loantracker.oicapp.com/api/v1/branches
    success response : {
       branches: {
        branch_details:
        branch_manager: {
        }
       }
    }
===============================================================
===============================================================
Getting logged user details
    method: get
    endpoint : https://loantracker.oicapp.com/api/v1/users/logged-user
    Authorization Needed: {
        Bearer Token : **token**
    }
    success response : {
       user: user
    }
    error response : {
        message : user does not exits
    }
===========================================================================
===========================================================================
Getting a user details
    method: get
    endpoint : https://loantracker.oicapp.com/api/v1/users/{user}
    Authorization Needed: {
        Bearer Token : **token**
    }
    success response : {
       user: user
    }
========================================================================
========================================================================