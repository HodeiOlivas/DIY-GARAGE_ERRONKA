from datetime import datetime
import datetime

fmt = '%H:%M:%S'
# d1 = datetime.datetime.strptime('17:12:00', fmt)
d1 = datetime.datetime.strptime('18:35:00', fmt)
d2 = datetime.datetime.strptime('19:00:00', fmt)

totalSeconds = (d2 - d1).total_seconds()
hoursRentedDecimal = totalSeconds / 3600
#print("Hours between customer's starting hour and closing hour: %.1f" % hoursRentedDecimal)
#print("Due to your reservation request is past the deadline, you can stay until we close: %.1f" % hoursRentedDecimal)
lengthStay = format(hoursRentedDecimal, '.1f')

print("Length of stay: " + str(lengthStay))

print("Due to your reservation request ends after the closing time, you can stay until we close: " + str(lengthStay) + "h.")

rentedHours = 1 - hoursRentedDecimal

print("The time difference is (h): " + str(rentedHours))
