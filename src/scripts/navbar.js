import React, { useEffect, useState } from "react"

const navLinks = [
  { label: "Menu", href: "#from-our-cases" },
  { label: "The Sacripantina", href: "#the-sacripantina" },
  { label: "Catering", href: "#catering" },
  { label: "Our Story", href: "#brand-quote" },
]

export default function Navbar() {
  const [menuOpen, setMenuOpen] = useState(false)

  useEffect(() => {
    const handleResize = () => {
      if (window.innerWidth >= 1024) setMenuOpen(false)
    }

    window.addEventListener("resize", handleResize)
    return () => window.removeEventListener("resize", handleResize)
  }, [])

  useEffect(() => {
    const handleAnchorClick = (e) => {
      const trigger = e.target.closest('a[href^="#"]')
      if (!trigger) return

      const targetId = trigger.getAttribute("href")
      if (!targetId || targetId === "#") return

      const targetEl = document.querySelector(targetId)
      if (!targetEl) return

      e.preventDefault()

      const wpAdminBar = document.getElementById("wpadminbar")
      const adminBarHeight = wpAdminBar ? wpAdminBar.offsetHeight : 0
      const navOffset = window.innerWidth >= 1024 ? 110 : 92
      const extraGap = 12

      const top =
        targetEl.getBoundingClientRect().top +
        window.pageYOffset -
        adminBarHeight -
        navOffset -
        extraGap

      window.scrollTo({
        top,
        behavior: "smooth",
      })

      setMenuOpen(false)
    }

    document.addEventListener("click", handleAnchorClick)
    return () => document.removeEventListener("click", handleAnchorClick)
  }, [])

  return (
    <>
     <header
  className="fixed left-0 right-0 z-[999] border-b border-[var(--st-border)] bg-[var(--st-cream)] shadow-[0_12px_36px_rgba(44,26,14,0.08)] transition-all duration-300"
        style={{ top: "var(--wp-admin--admin-bar--height, 0px)" }}
      >
        <div className="mx-auto flex max-w-[1440px] items-center justify-between gap-6 px-4 py-4 sm:px-6 lg:px-8">
          <a
            href="#top"
            className="shrink-0 font-[var(--st-font-display)] text-[1.55rem] italic leading-none tracking-[-0.03em] text-[var(--st-dark)] transition duration-300"
            aria-label="Stella Pastry & Cafe Home"
          >
            Stella Pastry & Cafe
          </a>

          <div className="hidden items-center gap-5 lg:flex">
            <div className="st-nav">
              <div className="container is-scrolled">
                {navLinks.map((item) => (
                  <a
                    key={item.label}
                    href={item.href}
                    className="btn"
                  >
                    {item.label}
                  </a>
                ))}

                <svg
                  className="outline"
                  overflow="visible"
                  width="100%"
                  height="100%"
                  viewBox="0 0 400 60"
                  preserveAspectRatio="none"
                >
                  <rect
                    className="rect"
                    pathLength="100"
                    x="0"
                    y="0"
                    width="400"
                    height="60"
                    rx="2"
                    ry="2"
                  />
                </svg>
              </div>
            </div>

            <a
              href="#order-delivery"
              className="inline-flex items-center justify-center bg-[var(--st-gold)] px-5 py-3 text-[11px] font-semibold uppercase tracking-[0.18em] text-[var(--st-dark)] shadow-[0_14px_34px_rgba(198,156,60,0.22)] transition duration-300 hover:-translate-y-0.5 hover:shadow-[0_20px_40px_rgba(198,156,60,0.28)]"
            >
              Order Now
            </a>
          </div>

          <button
            type="button"
            aria-label={menuOpen ? "Close menu" : "Open menu"}
            aria-expanded={menuOpen}
            onClick={() => setMenuOpen((prev) => !prev)}
            className="inline-flex h-11 w-11 items-center justify-center border border-[var(--st-border)] bg-white text-[var(--st-dark)] transition duration-300 lg:hidden"
          >
            <span className="relative block h-4 w-5">
              <span
                className={`absolute left-0 top-0 h-px w-5 bg-current transition duration-300 ${
                  menuOpen ? "translate-y-[7px] rotate-45" : ""
                }`}
              />
              <span
                className={`absolute left-0 top-[7px] h-px w-5 bg-current transition duration-300 ${
                  menuOpen ? "opacity-0" : "opacity-100"
                }`}
              />
              <span
                className={`absolute left-0 top-[14px] h-px w-5 bg-current transition duration-300 ${
                  menuOpen ? "-translate-y-[7px] -rotate-45" : ""
                }`}
              />
            </span>
          </button>
        </div>

        <div
          className={`overflow-hidden border-t transition-all duration-300 lg:hidden ${
            menuOpen
              ? "max-h-[420px] border-[var(--st-border)] bg-[var(--st-cream)] opacity-100"
              : "max-h-0 border-transparent opacity-0"
          }`}
        >
          <nav className="mx-auto max-w-[1440px] px-4 py-3 sm:px-6">
            <div className="grid gap-2">
              {navLinks.map((item) => (
                <a
                  key={item.label}
                  href={item.href}
                  className="px-2 py-3 text-sm font-semibold uppercase tracking-[0.14em] text-[var(--st-text)] transition duration-300 hover:text-[var(--st-burgundy)]"
                >
                  {item.label}
                </a>
              ))}

              <a
                href="#order-delivery"
                className="mt-2 inline-flex items-center justify-center bg-[var(--st-gold)] px-5 py-3 text-[11px] font-semibold uppercase tracking-[0.18em] text-[var(--st-dark)] transition duration-300 hover:opacity-90"
              >
                Order Now
              </a>
            </div>
          </nav>
        </div>

        <div className="navbar-wave" />
      </header>

      <div className="h-[78px] lg:h-[102px]" aria-hidden="true" />
    </>
  )
}