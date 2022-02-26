#include<stdio.h>
#include<windwos.h>

UINT toInt(SYSTEMTIME);

#define MILLIS_IN_SECONDS 1000
#define SECONDS_IN_MINUTE 60
#define MINUTES_IN_HOUR 60
#define HOURS_IN_DAY 24
#define MILLIS_IN_DAY (HOURS_IN_DAY * MINUTES_IN_HOUR * SECONDS_IN_MINUTE * MILLIS_IN_SECONDS)

int main(VOID) {
	const UINT activeDuration = 10 * MILLIS_IN_SECONDS;

	SYSTEMTIME  tempTime;
	GetSystemTime(&tempTime);

	UINT time = toInt(tempTime);
	UINT startTime = time;

	while (time - startTime < activeDuration) {
		GetSystemTime(&tempTime);
		time = toInt(tempTime);
		printf(
			"d %d h %d m %d s %d ms %d time %lu\n",
			tempTime.wDay,
			tempTime.wHour,
			tempTime.Wminute,
			tempTime.wSecond,
			tempTime.wMilliseconds,
			time
			);
	}

	return 0;
}

UINT toInt(SYSTEM systemTime) {
	UINT hoursInMonth = systemTime.wDay * HOURS_IN_DAY + systemTime.wHour;
	UINT minutesInMonth = hoursInMonth * MINUTES_IN_HOUR + systemTime.wMinute;
	UINT secondsInMonth = minutesInMonth * SECONDS_IN_MINUTE + systemTime.wSecond;
	UINT millisInMonth = secondsInMonth * MILLIS_IN_SECONDS + systemTime.wMilliseconds;
	return millisInMonth;
}