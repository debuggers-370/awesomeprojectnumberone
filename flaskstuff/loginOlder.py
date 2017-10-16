from abc import ABCMeta, ABC, abstractmethod, abstractproperty
from flask import Flask, app, request, url_for, redirect
import flask
from flask_login import LoginManager, login_user
from flask_wtf import Form
from wtforms import StringField, BooleanField, PasswordField, validators
from urllib.parse import urlparse, urljoin


class LoginForm(Form):
    name = StringField('Name:', validators=[validators.required()])
    password = PasswordField('Password:', validators=[validators.required(), validators.Length(min=3, max=35)])


class User(ABC):
    authenticated = False
    active = False
    anonymous = False
    id = None

    def is_authenticated(self):
        return self.authenticated

    def is_active(self):
        return self.active

    def is_anonymous(self):
        return self.anonymous

    def get_id(self):
        return self.id


login_manager = LoginManager()


@login_manager.user_loader
def load_user(user_id):
    pass  # TODO: unimplemented for the moment


def is_safe_url(target):
    ref_url = urlparse(request.host_url)
    test_url = urlparse(urljoin(request.host_url, target))
    return test_url.scheme in ('http', 'https') and \
           ref_url.netloc == test_url.netloc


@app.route('/login', methods=['GET', 'POST'])
def login():
    form = LoginForm()
    if form.validate_on_submit():
        login_user(User)
        flask.flash('Logged in successfully.')

        next = flask.request.args.get('next')
        if not is_safe_url(next):  # TODO: unimplemented
            return flask.abort(400)

        return flask.redirect(next or flask.url_for('index'))

    return flask.render_template('htdoc/login.html', form=form)
