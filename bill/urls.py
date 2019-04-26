from django.conf.urls import url
from bill import views
# SET THE NAMESPACE!
app_name = 'bill'
# Be careful setting the name to just /login use userlogin instead!
urlpatterns=[
    url(r'^signup/$',views.signup,name='signup'),
    url(r'^user_login/$',views.user_login,name='user_login'),
]

"""urlpatterns=[
	path('bill_list',views.bill_list,name='bill_list'),
	path('',views.welcome,name='welcome'),
	path('signup',views.signup,name='signup'),
	path('contact',views.contact,name='contact'),
	path('admin',views.admin,name='admin'),
	path('login',views.login,name='login'),
	path('signup_check',views.signup_check,name='signup_check'),
]"""