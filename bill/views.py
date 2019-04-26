from django.shortcuts import render
from django.db import connection
from .models import Bill
from .models import Details
#from .forms import BillForm
from bill.forms import UserForm, BillForm
from django.contrib.auth import authenticate, login, logout
from django.http import HttpResponseRedirect, HttpResponse
from django.urls import reverse
from django.contrib.auth.decorators import login_required
# Create your views here.
def bill_list(request):
	bills = Bill.objects.order_by('date_d')
	return render(request,'bill/bill_list.html',{'bills':bills})

def welcome(request):
	return render(request,'bill/welcome.html',{})
	
def total(self):
	cursor=connection.cursor()
	cursor.execute("SELECT SUM(SPENT) FROM Details")
	row=cursor.fetchall()
	return render(request,'bill/total.html',{row})

def upload(request):
	if request.method == 'POST':
		bill_number= request.POST.get('Bill_number')
		date_d = request.POST.get('date_d')
		Company = request.POST.get('Company')
		Category = request.POST.get('Category')
		Spent = request.POST.get('Spent')
	return render(request,'bill/upload.html',{'Bill_number':bill_number,'date_d':date_d,'Company':Company,'Category':Category,'Spent':Spent})

"""def signup(request):
	return render(request,'bill/signup.html',{})

def contact(request):
	return render(request,'bill/contact.html',{})
	
def admin(request):
	return render(request,'bill/admin.html',{})

def login(request):
	return render(request,'bill/login.html',{})

def signup_check(request):
	return render(request,'bill/signup_check.html',{})"""

@login_required
def special(request):
    return HttpResponse("You are logged in !")
@login_required
def user_logout(request):
    logout(request)
    return HttpResponseRedirect(reverse('welcome'))
def signup(request):
    registered = False
    if request.method == 'POST':
        user_form = UserForm(data=request.POST)
        bill_form = BillForm(data=request.POST)
        if user_form.is_valid() and bill_form.is_valid():
            user = user_form.save()
            user.set_password(user.password)
            user.save()
            bill_s = bill_form.save(commit=False)
            bill_s.user = user
            """if 'Bill_number' in request.FILES:
                print('found it')
                bill_s.Bill_number = request.FILES['Bill_number']"""
            bill_s.save()
            registered = True
        else:
            print(user_form.errors,bill_form.errors)
    else:
        user_form = UserForm()
        bill_form = BillForm()
    return render(request,'bill/signup.html',
                          {'user_form':user_form,
                           'bill_form':bill_form,
                           'registered':registered})
def user_login(request):
    if request.method == 'POST':
        username = request.POST.get('username')
        password = request.POST.get('password')
        user = authenticate(username=username, password=password)
        if user:
            if user.is_active:
                login(request,user)
                return HttpResponseRedirect(reverse('welcome'))
            else:
                return HttpResponse("Your account was inactive.")
        else:
            print("Someone tried to login and failed.")
            print("They used username: {} and password: {}".format(username,password))
            return HttpResponse("Invalid login details given")
    else:
        return render(request, 'bill/login.html', {})