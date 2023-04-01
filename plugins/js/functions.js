function validateEmail(field)
{
    if (field == "") return "No email was entered.\n"
    else if (!((field.indexOf(".") > 0) &&
               (field.indexOf("@") > 0)) ||
              /[^\w0-9._-]@\w+\.com$/.test(field))
        return "The email address is invalid"
    return ""
}