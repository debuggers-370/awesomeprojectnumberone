from flask import Flask, render_template, flash, request
from wtforms import Form, TextField, TextAreaField, validators, StringField, SubmitField, PasswordField, BooleanField


# App config.
DEBUG = True
app = Flask(__name__)
app.config.from_object(__name__)
app.config['SECRET_KEY'] = '2'


class RegisterForm(Form):
    name = StringField('Name:', validators=[validators.required()])
    email = StringField('Email:', validators=[validators.required(), validators.Length(min=6, max=35)])
    password = PasswordField('Password:', validators=[validators.required(), validators.Length(min=3, max=35)])


class LoginForm(Form):
    name = StringField('Name:', validators=[validators.required()])
    password = PasswordField('Password:', validators=[validators.required(), validators.Length(min=3, max=35)])


@app.route("/", methods=['GET', 'POST'])
def registration():
    form = RegisterForm(request.form)

    print form.errors
    if request.method == 'POST':
        name = request.form['name']
        password = request.form['password']
        email = request.form['email']
        print name, " ", email, " ", password

        if form.validate():
            # Save the comment here.
            flash('Thanks for registering ' + name + ' at ' + email)
        else:
            flash('Error: All the form fields are required. ')

    return render_template('homepage.html', form=form)

@app.route("/login", methods=['GET', 'POST'])
def login():
    form = LoginForm(request.form)

    print form.errors
    if request.method == 'POST':
        name = request.form['name']
        password = request.form['password']

        print name, " ", password

        if form.validate():

            return render_template('login.html', form=form)
        else:
            flash('Error: All the form fields are required. ')

    return render_template('homepage.html', form=form)

@app.route("/about", methods=['GET', 'POST'])
def about():
    return render_template('about.html')

@app.route("/contact", methods=['GET', 'POST'])
def contact():
    return render_template('contact.html')

@app.route("/", methods=['GET', 'POST'])
def home():
    return render_template('homepage.html')

@app.route("/profilePage", methods=['GET', 'POST'])
def profile():
    return render_template('profilePage.html')

if __name__ == "__main__":
    app.run()
