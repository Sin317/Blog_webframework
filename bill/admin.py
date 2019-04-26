from django.contrib import admin

# Register your models here.
from bill.models import Bill, User

admin.site.register(Bill)